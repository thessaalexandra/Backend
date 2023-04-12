<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Game;

use App\Models\Pesanan;

class HomeController extends Controller
{
    public function userpage(){
        $game=Game::paginate(4);
        return view('home.userpage', compact('game'));
    }
    public function homepageafter(){
        $game=Game::paginate(4);
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
        $game=Game::paginate(4);
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
    public function detail_games($id){
        $game=game::find($id);
        return view('home.detail_games', compact('game'));

    }

    public function tambah_pesanan(Request $request, $id){
        if(Auth::id()){
            $user=Auth::user();
            $game=game::find($id);
            $pesanan=new pesanan;
            $pesanan->nama=$user->name;
            $pesanan->email=$user->email;
            $pesanan->no_telepon=$user->no_telepon;
            $pesanan->id_user=$user->id;

            $pesanan->nama_game=$game->nama_game;
            $pesanan->harga=$game->harga * $game->naik_rank;
            $pesanan->gambar=$game->gambar;
            $pesanan->id_game=$game->id;
            $pesanan->naik_rank=$game->naik_rank;
            $pesanan->save();
            return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }
}
