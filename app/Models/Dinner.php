<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;

class Dinner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'country',
        'calendar',
        'language',
        'description',
        'category_id',
    ];


        // 検索用のスコープ
    public function scopeSearch(Builder $query, $params)
    {

        if (!empty($params['country'])) {
            $query->where('country',  $params['country']);
        }
        if (!empty($params['calendar'])) {
            $query->where('calendar',  $params['calendar']);
        }
        return $query;
    }
// 検索用ここまで

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // public function favorites()
    // {
    //     return $this->hasMany(favorite::class);
    // }


}
