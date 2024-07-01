<?php

namespace App\Http\Controllers;

use App\Models\coment;
use App\Models\Tag;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$id)
    {

        $coment=new coment;
        $coment->coment=$request->coment;
        $coment->post_id=$id;
        $coment->save();
        $tag=new Tag;
        $tag->tag=$request->tags;
        $tag->post_id=$id;
        $tag->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(coment $coment)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(coment $coment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coment $coment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coment $coment)
    {
        //
    }
}
