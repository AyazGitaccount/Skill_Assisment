<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
  public function users_details(){

       $data = DB::table('short_urls')
       ->join('users','short_urls.user_id','=','users.id')
       ->select('users.name','users.email','short_urls.id','short_urls.short_url','short_urls.original_url','short_urls.vists','short_urls.vistor_IP')
       ->get();
       
       return view('admin.dashboard', compact('data'));
  }   
 
  public function delete($id)
  {
    ShortUrl::destroy($id);
    return back();
  }
}
