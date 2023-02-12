<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;


class ShortUserController extends Controller
{
    public function index()
    {
        $links = auth()->user()->links;

        return view('links.index', compact('links'));
    }

    public function delete($id)
    {
      ShortUrl::destroy($id);
      return back();
    }
}
