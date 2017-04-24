<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Message;
use Illuminate\Http\Request;

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
        return view('home');
    }
    public function showUsers()
    {
        $users = User::all();
        return $users;
    }
    public function sendpost(Request $request)
    {
        Post::create($request->all());
        return back();
    }
    public function delete(Request $request)
    {
        Message::find($request['id'])->delete();
        return back();
    }
    
}
