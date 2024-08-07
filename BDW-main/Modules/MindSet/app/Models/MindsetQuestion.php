<?php

namespace Modules\MindSet\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\MindSet\Database\factories\MindsetQuestionFactory;

class MindsetQuestion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['question'];

    public function options()
    {
        return $this->hasMany(MindsetQuestionOption::class, 'question_id');
    }
    
}
