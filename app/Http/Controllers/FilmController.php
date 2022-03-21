<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function landingPage(Type $var = null)
    {
        return view('landing');
    }

    public function crudPage(Type $var = null)
    {
        $film = Film::all();
        return view('crud', compact('film'));
    }

    public function readFilm(Type $var = null)
    {
        $film = Film::all();
        return view('read', compact('film'));
    }


    public function createFilm(Type $var = null)
    {
        return view('create');
    }

    public function saveCreateFilm(Request $request)
    {

        if($request->hasFile('img')){
            $gambar = $request->file('img');
            $destinationPath = 'img';
            $filename = $destinationPath."/".$gambar->getClientOriginalName();
            $gambar->move($destinationPath, $filename);
            $urlgambar = $filename;
        }

        Film::create([
            'foto' => $urlgambar,
            'nama_film' => $request->nama,
            'tanggal' => $request->tanggal,
            'rating' => $request->rating,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('crud-page');
    }


    public function updateFilm($id)
    {
        $film = Film::find($id);
        return view('update', compact('film'));
    }

    public function saveUpdateFilm(Request $request, $id)
    {

        $film = Film::find($id);
        $urlgambar = $film->foto;

        if($request->hasFile('img')){
            $gambar = $request->file('img');
            $destinationPath = 'img';
            $filename = $destinationPath."/".$gambar->getClientOriginalName();
            $gambar->move($destinationPath, $filename);
            $urlgambar = $filename;
        }

        $film->foto = $urlgambar;
        $film->nama_film = $request->nama;
        $film->rating = $request->rating;
        $film->tanggal = $request->tanggal;
        $film->deskripsi = $request->deskripsi;
        $film->save();

        return redirect()->route('crud-page');
    }

    public function deleteFilm($id)
    {
        Film::find($id)->delete();
        return redirect()->route('crud-page');
    }


    public function loginPage(Type $var = null)
    {
        return view('loginPage');
    }

    public function dashboardPage(Type $var = null)
    {
        return view('dashboard');
    }
}
