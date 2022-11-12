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
        'other',
        'calendar',
        'description',
        'category_id',
    ];


    // 検索用のスコープ
    public function scopeSearch(Builder $query, $params)
    {
        // parmsが空だったら終了
        if(empty($params)){return $query;}

        // 片方が空だったらもう片方に値を入れる
        if (empty($params['calendar_s']) || empty($params['calendar_e'])){
            if (empty($params['calendar_s'])){$params['calendar_s'] = now();}
            // if (empty($params['calendar_e'])){$params['calendar_e'] = now()->addYear(10);}
        }

        if (!empty($params['country'])) {
            $query->where('country',  $params['country']);
        }
        if (!empty($params['calendar_s'])) {
            $query->where('calendar', '>=', $params['calendar_s']);
        }
        if (!empty($params['calendar_e'])) {
            $query->where('calendar', '<=', $params['calendar_e']);
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
