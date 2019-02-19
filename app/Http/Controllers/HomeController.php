<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts= Post::all();
        //trás somente os posts do user logado
     //   $posts= Post::where('user_id', auth()->user()->id)->get();
      return view('home', compact('posts'));
    }

    public function update($idPost)
    {
       $post= Post::find($idPost);
      // $this->authorize('update-post', $post);
         if(Gate::denies('update-post', $post))
               abort(403, 'Não autorizado');
     
       return view('update-post', compact('post'));
    }
}
