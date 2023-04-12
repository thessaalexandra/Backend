<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Game;

class HomeController extends Controller
{
    public function userpage(){
        $game=Game::all();
        return view('home.userpage');
    }
    public function homepageafter(){
        $game=Game::all();
        return view('home.homepageafter', compact('game'));
    }
    public function aboutus(){
        return view('home.aboutus');
    }
    public function benefits(){
        return view('home.benefits');
    }
    public function status(){
        return view('home.status');
    }
    public function shop(){
        $game=Game::all();
        return view('home.shop', compact('game'));
    }
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }
        else{
            return view('home.homepageafter');
        }
    }
}
