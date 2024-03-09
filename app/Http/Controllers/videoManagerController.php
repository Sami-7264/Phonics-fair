<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videoManagerController extends Controller
{
    public function manageVideo(Request $request){
        $videoUrl = $request->query('video_url');
        return view('video-page', ["videoUrl" => $videoUrl]);

    }
}
