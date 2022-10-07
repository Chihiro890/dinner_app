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
}