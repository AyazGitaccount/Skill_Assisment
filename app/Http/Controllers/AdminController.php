<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Illuminate\Support\Facades\DB;
use App\Models\Advertisment;



class AdminController extends Controller
{
  public function users_details(){

       $data = DB::table('short_urls')
       ->join('users','short_urls.user_id','=','users.id')
       ->select('users.name','users.email','short_urls.id','short_urls.short_url','short_urls.original_url')
       ->paginate(5);
       
       return view('admin.dashboard', compact('data'));
  }   
 
  public function delete($id)
  {
    ShortUrl::destroy($id);
    return back();
  }

  public function add_advertisment(Request $request )
  {     
    $validateData = $request->validate([
      'add_url' => 'required|url',
      
  ], [
      'add_url.required' => 'The add_url field is required.',
  ]);

  $data = new Advertisment();
  $data->add_url = $validateData['add_url'];
  $data->save();
  return back()->withSuccess('Advertisment added successfully !');

  }
}
