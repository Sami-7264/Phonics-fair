<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupLessons extends Model
{
    use HasFactory;
    protected $table = 'pf_group_lesson';
    protected $primaryKey = 'id';
    public $timestamps = false; // Assuming `date_added` and `last_modified` are managed manually

    protected $fillable = [
        'title',
        'level',
        'slug',
        'group_type',
        'disabled',
        'deleted',
        'date_added',
        'last_modified',
        'priority',
        'img',
        'listen_img',
        'listen_sound',
        'listen_img2',
        'listen_sound2',
        'is_sample',
        'has_video',
        'coming_video',
        'sample_video',
        'video_mp4',
        'youtube_url',
        'video_flv',
        'vimeo_url',
        'video_sample_mp4',
        'video_sample_flv',
        'sample_youtube_url',
        'sample_vimeo_url',
        'display_type',
        'has_card',
        'sample_card',
        'is_test',
        'has_drag',
        'sample_drag',
        'icon_id',
    ];
}
