<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class StartReadingController extends Controller
{
    public function index(){

            return view('start-reading');
    }
    public function startReading1(){
        $lessons = Lesson::select('pf_lessons.*', 'pf_group_lesson.title as group_lesson_name', 'pf_group_type.title as group_type', 'pf_group_lesson.img as group_image',
            'pf_group_lesson.video_mp4 as group_video', 'pf_group_lesson.listen_sound as group_sound')
            ->leftJoin('pf_group_lesson', 'pf_lessons.group_lesson', '=', 'pf_group_lesson.id')
            ->leftJoin('pf_group_type', 'pf_group_lesson.group_type', '=', 'pf_group_type.id')
            ->where('pf_group_type.title', '=', 'Start Reading (16-22)')
            ->where('pf_lessons.deleted', '=', 0)
            ->get();
        return view('start-reading(16-22)', ['lessons' => $lessons]);
    }
    public function startReading2(){
        $lessons = Lesson::select('pf_lessons.*', 'pf_group_lesson.title as group_lesson_name', 'pf_group_type.title as group_type', 'pf_group_lesson.img as group_image',
            'pf_group_lesson.video_mp4 as group_video', 'pf_group_lesson.listen_sound as group_sound')
            ->leftJoin('pf_group_lesson', 'pf_lessons.group_lesson', '=', 'pf_group_lesson.id')
            ->leftJoin('pf_group_type', 'pf_group_lesson.group_type', '=', 'pf_group_type.id')
            ->where('pf_group_type.title', '=', 'Start Reading (23-29)')
            ->where('pf_lessons.deleted', '=', 0)
            ->get();
        return view('start-reading(23-29)', ['lessons' => $lessons]);
    }
    public function startReading3(){
        $lessons = Lesson::select('pf_lessons.*', 'pf_group_lesson.title as group_lesson_name', 'pf_group_type.title as group_type', 'pf_group_lesson.img as group_image',
            'pf_group_lesson.video_mp4 as group_video', 'pf_group_lesson.listen_sound as group_sound')
            ->leftJoin('pf_group_lesson', 'pf_lessons.group_lesson', '=', 'pf_group_lesson.id')
            ->leftJoin('pf_group_type', 'pf_group_lesson.group_type', '=', 'pf_group_type.id')
            ->where('pf_group_type.title', '=', 'Start Reading (30-36)')
            ->where('pf_lessons.deleted', '=', 0)
            ->get();
        return view('start-reading(30-36)', ['lessons' => $lessons]);
    }
    public function startReading4(){
        $lessons = Lesson::select('pf_lessons.*', 'pf_group_lesson.title as group_lesson_name', 'pf_group_type.title as group_type', 'pf_group_lesson.img as group_image',
            'pf_group_lesson.video_mp4 as group_video', 'pf_group_lesson.listen_sound as group_sound')
            ->leftJoin('pf_group_lesson', 'pf_lessons.group_lesson', '=', 'pf_group_lesson.id')
            ->leftJoin('pf_group_type', 'pf_group_lesson.group_type', '=', 'pf_group_type.id')
            ->where('pf_group_type.title', '=', 'Start Reading (37-43)')
            ->where('pf_lessons.deleted', '=', 0)
            ->get();
        return view('start-reading(37-43)', ['lessons' => $lessons]);
    }
    public function startReading5(){
        $lessons = Lesson::select('pf_lessons.*', 'pf_group_lesson.title as group_lesson_name', 'pf_group_type.title as group_type', 'pf_group_lesson.img as group_image',
            'pf_group_lesson.video_mp4 as group_video', 'pf_group_lesson.listen_sound as group_sound')
            ->leftJoin('pf_group_lesson', 'pf_lessons.group_lesson', '=', 'pf_group_lesson.id')
            ->leftJoin('pf_group_type', 'pf_group_lesson.group_type', '=', 'pf_group_type.id')
            ->where('pf_group_type.title', '=', 'Start Reading (44-50)')
            ->where('pf_lessons.deleted', '=', 0)
            ->get();
        return view('start-reading(44-50)', ['lessons' => $lessons]);
    }
    public function startReading6(){
        $lessons = Lesson::select('pf_lessons.*', 'pf_group_lesson.title as group_lesson_name', 'pf_group_type.title as group_type', 'pf_group_lesson.img as group_image',
            'pf_group_lesson.video_mp4 as group_video', 'pf_group_lesson.listen_sound as group_sound')
            ->leftJoin('pf_group_lesson', 'pf_lessons.group_lesson', '=', 'pf_group_lesson.id')
            ->leftJoin('pf_group_type', 'pf_group_lesson.group_type', '=', 'pf_group_type.id')
            ->where('pf_group_type.title', '=', 'Start Reading (51-58)')
            ->where('pf_lessons.deleted', '=', 0)
            ->get();
        return view('start-reading(51-58)', ['lessons' => $lessons]);
    }

}
