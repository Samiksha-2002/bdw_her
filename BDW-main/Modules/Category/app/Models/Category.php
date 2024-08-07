<?php

namespace Modules\Category\app\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

//use App\Models\User;

class Category extends Model
{
    // group > 1 for not ready, 2 for ready
    protected $fillable = ['name', 'group', 'description', 'image', 'parent_id'];
    
    public function parent()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function child()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function scopeFilterChild($q, $parent_id)
    {
        if($parent_id){
            return $q->where('parent_id', $parent_id);
        }

        return $q->where('parent_id', "0");
        
    }

    public function scopeWhereIf($q, $col, $operator, $value)
    {
        if($value && $value != '%%' && $value != '%'){
            return $q->where($col, $operator, $value);
        }

        return $q;
    }
}


