<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Support\Facades\DB;



class ShortUserController extends Controller
{
    public function index()
    {
        // $links = auth()->user()->links->paginate(2);
        $links = DB::table('short_urls')->where('user_id', auth()->user()->id)->paginate(5);

        return view('links.index', compact('links'));
    }

    public function delete($id)
    {
      ShortUrl::destroy($id);
      return back();
    }
}
