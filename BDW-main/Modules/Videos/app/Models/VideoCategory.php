<?php

namespace Modules\Videos\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Videos\Database\factories\VideoCategoryFactory;

class VideoCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['category_id','video_id'];

}
