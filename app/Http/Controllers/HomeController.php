<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $search = request('query');
        // $post = Post::where(request('query'),function($q){
        //     $q->where('name','like','%' .request('query').'%');
        // })->get();
        // return view('home', compact('name', 'search'));
        return view('home');
    }

}


