<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\ShortUrl;
use App\Models\Advertisment;



class AddsController extends Controller
{
    public function get_adds()
    {
        $data = DB::table('advertisment')->paginate(5);
      
        return view('admin.statistics', ['data'=>$data]);
    }

    public function delete_ad($id)
    {
        
        Advertisment::destroy($id);
        return back();
            
    }
}
