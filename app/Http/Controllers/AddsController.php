<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ShortUrl;



class AddsController extends Controller
{
    public function get_adds()
    {
        $data = DB::table('advertisment')->get();
      
        return view('admin.statistics', ['data'=>$data]);
    }

    public function skip_to_url()
    {
        
        // $short_url = ShortUrl::where('short_url', $id)->first();
            
    }
}
