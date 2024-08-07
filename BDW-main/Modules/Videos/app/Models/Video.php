<?php

namespace Modules\Videos\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Videos\Database\factories\VideoFactory;
use Modules\Videos\app\Models\VideoCategory;
use Modules\Type\app\Models\Type;
class Video extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['video','image','type_id','description'];

    
    // protected static function newFactory(): VideoFactory
    // {
    //     //return VideoFactory::new();
    // }
   
    public function typevideo()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function videocategory()
    {
        return $this->hasMany(VideoCategory::class, 'video_id', 'id');   
    }
}
