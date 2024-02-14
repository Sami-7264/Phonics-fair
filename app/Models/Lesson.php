<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'pf_lessons';
    protected $primaryKey = 'id';
    public $timestamps = false; // Assuming `date_added` and `last_modified` are managed manually

    protected $fillable = [
        'title',
        'slug',
        'group_lesson',
        'date_added',
        'last_modified',
        'disabled',
        'deleted',
        'priority',
        'is_sample',
        'type',
        'img',
        'attach_file',
        'listen_img',
        'listen_sound',
        'listen_img2',
        'listen_sound2',
        'display_type',
    ];
}
