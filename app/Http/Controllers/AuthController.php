<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;

class AuthController extends Controller
{
    public function index()
    {
        return view("login.login");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("login.register");
    }

    /**     'name',
       * 'email',
        * 'password',
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $val=$request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:8|confirmed',
        ]);


        $p=User::create(
            $val
        );

        auth::login($p);
        return redirect('/home');
    }

    public function login(Request $request)
    {
        $val=$request->validate([

            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt($val)){
            $request->session()->regenerate();

            return redirect()->intended("/");
        }
        return back();
    }

    public function logout(Request $request)
    {

            $request->session()->invalidate();
            $request->session()->regenerateToken();

        return redirect("/");
    }
    public function admin(Request $request)
    {

        $users=User::all();
        return view('user',compact('users'));
    }
    public function destroy2(User $us)
    {

        $us->delete();
        return redirect()->route('post.index');
    }
}
