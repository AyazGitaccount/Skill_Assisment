<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortRequest;
use Illuminate\Http\Request;
use App\Models\ShortUrl;
use App\Models\Advertisment;


class ShortUrlController extends Controller
{
    public function short(ShortRequest $request)
    {
        if($request->original_url){
           
            if(auth()->user()){
                $new_url = auth()->user()->links()->create([
                    'original_url' => $request->original_url
                ]);
            }
           
            else {
           
            $new_url = ShortUrl::create([
                'original_url'=> $request->original_url
            ]);
           }
           

            if($new_url){
                $short_url = base_convert($new_url->id, 10,36);
                $new_url -> update([
                    'short_url' => $short_url
                ]);
                
                return redirect()->back()->with('success_message','Your short URL: <a class="text-green-500" target="_blank" href="'.url($short_url).'">'.url($short_url).'</a>' );
            }
        }

        return back();

    }

    public function show($code)
    {
        $short_url = ShortUrl::where('short_url', $code)->first();
        $add = Advertisment::all()->random(1)->first();
        
        if($short_url){
            
            $clientIP = request()->ip();
            $add->increment('vists');
            // $short_url->update([
            //     'vistor_IP' => $clientIP
            // ]);

            // insert in visitor info table
            // view a page
            // show advert here
    
            return view('advertisment', compact('short_url','add'));
         
        }
        

        return redirect()->to(url('/'));
    }
   
    
}
