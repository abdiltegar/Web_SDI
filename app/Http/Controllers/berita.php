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

      return view('berita');
  }
}
