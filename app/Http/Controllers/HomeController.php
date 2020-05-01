<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $user = \App\User:: paginate(5);
        return view('home')->with('user',$user);
    }

    public function show($username) {
        // dd($username);
        $user =  User::with('following', 'followers')->where('username', $username)->first();
        // dd($user)
        // if(!$user){
        //     return "not found";
        // }
        $followers = $user->followers;
        $following = $user->following;
        // dd($user);
        // dd($followers);

        // return view('welcome')->with(['user' => $user, 'newInfo' => 'newvalue']);
        return view('home', array('user' => $user, 'newInfo' => 'newwer'));
        
    }
}
