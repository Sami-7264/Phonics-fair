<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class ABCExtraController extends Controller
{
    public function index(){
        $lessons = Lesson::select('pf_lessons.*'
//            , 'pf_games.*'
            ,'pf_group_lesson.title as group_lesson_name', 'pf_group_type.title as group_type', 'pf_group_lesson.img as group_image',
            'pf_group_lesson.video_mp4 as group_video', 'pf_group_lesson.listen_sound as group_sound')
            ->leftJoin('pf_group_lesson', 'pf_lessons.group_lesson', '=', 'pf_group_lesson.id')
            ->leftJoin('pf_group_type', 'pf_group_lesson.group_type', '=', 'pf_group_type.id')
//            ->leftJoin('pf_games', 'pf_group_lesson.id', '=', 'pf_games.group_lesson')
            ->where('pf_group_type.title', '=', 'ABCs Extra')
            ->where('pf_lessons.deleted', '=', 0)
            ->get();
        dd($lessons->toArray());
        return view('abc-extra' ,['lessons' => $lessons]);
    }
}
