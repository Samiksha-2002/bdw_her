<?php

namespace Modules\MindSet\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\MindSet\Database\factories\MindsetQuestionOptionFactory;

class MindsetQuestionOption extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['question_id', 'option'];
   
}
