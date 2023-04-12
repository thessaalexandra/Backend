<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

class AdminController extends Controller
{
    public function view_games(){
        return view('admin.games');
    }

    public function tambah_game(Request $request){
        $game=new game;
        $game->nama_game=$request->nama_game;
        $game->deskripsi=$request->deskripsi;
        $game->harga=$request->harga;
        $gambar=$request->gambar;

        $imagename=time().'.'.$gambar->getClientOriginalExtension();
        $game->save();
        $request->gambar->move('game', $imagename);

        $game->gambar=$imagename;
        $game->save();
        return redirect()->back()->with('message', "Game berhasil ditambahkan!");
    }

    public function show_games(){
        $game=game::all();
        return view('admin.show_games', compact('game'));
    }

    public function hapus_games($id){
        $game=game::find($id);
        $game->delete();
        return redirect()->back()->with('message', 'Game berhasil dihapus!');
    }

    public function edit_games($id){
        $game=game::find($id);
        return view('admin.edit_games', compact('game'));
    }

    public function edit_games_confirm(Request $request, $id){
        $game=game::find($id);
        $game->nama_game=$request->nama_game;
        $game->deskripsi=$request->deskripsi;
        $game->harga=$request->harga;
        $game->naik_rank=$request->naik_rank;

        $gambar=$request->gambar;
        if($gambar){
            $imagename=time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('game',$imagename);
            $game->gambar=$imagename;
        }
            $game->save();
            return redirect()->back()->with('message', 'Game berhasil diupdate!');
        
    }
}
