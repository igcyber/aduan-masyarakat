<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Mass-Assignable Fields
    protected $fillable = [
        'name',
        'slug',
        'image'
    ];

    // Relasi Many-to-Many dengan Model Post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
