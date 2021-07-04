<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
class VideoController extends Controller
{
    public function upload(Request $request)
    {
       
        $video= new Video;
        if($request->hasFile('video'))
        {
           $file=$request->file('video');
           $file->move(public_path().'/uploads/',$file->getClientOriginalName());
           $video->video=$file->getClientOriginalName();
        }
    }

    public function display()
    {
        //display videos
    }
}
