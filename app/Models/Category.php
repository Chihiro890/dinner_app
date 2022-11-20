<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    // protected $appends = [
    // 'category_name'
    // ];





    // public function getImagePathAttribute()
    // {
    //     return 'images/meals/' . $this->image;
    // }
}
