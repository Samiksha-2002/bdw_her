<?php

namespace Modules\MindSet\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\MindSet\Database\factories\MindsetQuestionOptionAnswerFactory;

class MindsetQuestionOptionAnswer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $fillable = ['user_id', 'question_id', 'option_id'];
    public $timestamps = false;

}
