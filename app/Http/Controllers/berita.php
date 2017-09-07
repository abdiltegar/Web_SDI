<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class berita extends Controller
{
  public function index()
  {
    $berita = DB::table('berita')->get();

    return view('berita.index', ['berita' => $berita]);
  }
  public function search($q)
  {
    $db =  DB::connection()->getPdo();
    $berita = DB::select("select * from berita where judul like '%$q%' or deskripsi like '%$q%' ");
    return view('berita.index')->with('berita',$berita);
  }
}
