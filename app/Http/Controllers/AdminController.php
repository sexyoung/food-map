<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PageAlbum;

class AdminController extends Controller
{
    public function index($key = '')
    {
      if($key !== env("ADMIN_KEY")) return redirect()->to("/");
      return view("admin", ['pageAlbums' => PageAlbum::orderBy('id', 'desc')->get()]);
    }

    public function adminConfirm()
    {
      $data = request()->except("_token");
      $pageAlbum = PageAlbum::find($data["id"]);
      $pageAlbum->confirmed = $data["confirmed"];
      $pageAlbum->save();
      return true;
    }
}
