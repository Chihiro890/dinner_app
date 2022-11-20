<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];

    protected $appends = [
    'user_name'
    ];

    protected $hidden = [
    'user'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dinner()
    {
        return $this->belongsTo(Dinner::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function getUserNameAttribute()
    {
        return $this->user->name;
    }
}
