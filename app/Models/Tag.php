<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Mass-Assignable Fields
    protected $fillable = [
        'name',
        'slug'
    ];

    // Relasi Many-to-Many dengan Model Post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    // Relasi Many-to-Many dengan Model Aduan
    public function aduans()
    {
        return $this->belongsToMany(Aduan::class);
    }
}
