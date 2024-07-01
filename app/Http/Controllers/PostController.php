<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\coment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        if(count($posts)>0){
        for ($i=0; $i <count($posts) ; $i++) {
            $post=$posts[$i];
            $user=User::findorfail($post["user_id"]);
            $use[]=$user["name"];
        }

        $tag=Tag::all();

        return view('post.index',compact('posts'))->with('use',$use)->with('tag',$tag);

    }else{

        $tag=[];
        $use=[];
        return view('post.index',compact('posts'))->with('use',$use);
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cates=Category::all();

        return view('post.create')->with('cates',$cates);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $e=auth()->user();

        $post = new Post;
        if ($request->hasFile("img")) {
            $img = $request->img;
            $imgname = time() . '.' . $img->getClientOriginalExtension();;
            $img->move(public_path('imges'), $imgname);
        }

        $post->user_id=$e["id"];
        $post->category_id=$request->category;
        $post->titel = $request->titel;
        $post->description = $request->description;
        $post->img = $imgname;
        $post->save();

        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post,$id)
    {
        $post=Post::findorfail($id);
        $com=coment::all()->where('post_id',$id);
        $tags=Tag::all()->where('post_id',$id);
        if(count($com)!=0){
        foreach ($tags as  $value) {
            if ($value['tag']!="null") {
                $tag=User::all()->where('id',$value['tag']);
            }else{
                $tag[]=['name'=>''];
            }

            $use=User::all();
            for ($i=0; $i < count($use); $i++)
                $user=$use[$i];
                $users[]=array($user["id"]=>$user["name"]) ;

        return view('post.show',compact('post'))->with('users',$users)->with('com',$com)->with('tag',$tag);

        }}
        $com=[];
        $tag=[];

            $use=User::all();
            for ($i=0; $i < count($use); $i++)
                $user=$use[$i];
                $users[]=array($user["id"]=>$user["name"]) ;


        return view('post.show',compact('post'))->with('users',$users)->with('com',$com)->with('tag',$tag);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $cates=Category::all();
        return view('post.edit')->with('post', $post)->with('cates',$cates);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $e=auth()->user();
        $up = Post::findorfail($id);
        $imgname =  $up->img;
        if ($request->hasFile("img")) {
            $img = $request->img;
            $imgname = time() . '.' . $img->getClientOriginalExtension();;
            $img->move(public_path('imges'), $imgname);
        }

        $up->user_id=$e["id"];
        $up->category_id=$request->category;
        $up->titel = $request->titel;
        $up->description = $request->description;
        $up->img = $imgname;
        $up->save();


        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $post->delete();
        return redirect()->route('post.index');
    }

    public function  tagcoment(Request $request,  $id)
    {

    }

}
