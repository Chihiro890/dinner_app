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
        return $query;
    }
    // 検索用のスコープここまで

// 検索ここから
    // public function scopePublished(Builder $query)
    // {
    //     $query->where(‘is_published’, true)
    //         ->where(‘start_date’, ‘>=’, now());
    //     return $query;
    // }
// https://qiita.com/Yado_Tarou/items/9da4e5248e8df5b2c5ce
    // スコープを使用するには必ず最初にscopeを名前の初めに付ける
    // 最初の変数には必ず$queryを使用
    // スコープとはhttps://zenn.dev/naoki_oshiumi/articles/28a14c75f79599
    // public function scopeSearch(Builder $query, $search)
    // {
    //     if (!empty($search[‘career’])) {
    //         $query->where(‘career’, ‘like’, ‘%’ . $search[‘career’] . ‘%’);
    //     }
    // }
// 検索ここまで

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
