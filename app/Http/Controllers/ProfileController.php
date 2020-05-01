<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    //
    // public function index($user){
    //    dd($user);
    //    return view('profile');
    // }

    public function index(){
        $user = auth()->user();
        return view('mainPages.profile')->with('user', $user);
    }

    public function show($user){
        $user = User::find($user);
        return view('redirected', [
            'user' => "$user",
        ]);
    }
}
