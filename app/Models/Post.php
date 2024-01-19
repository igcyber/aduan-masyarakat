<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Mass-Assignable Fields
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'user_id',
        'content',
        'image',
        'descrp'
    ];

    // Relasi One-to-Many dengan Model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi One-to-Many dengan Model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi Many-to-Many dengan Model Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
