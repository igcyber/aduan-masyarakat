<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;

    //Mass-Assignable fields
    protected $fillable = [
        'title',
        'image',
        'slug',
        'kecamatan',
        'desa_kelurahan',
        'isi_aduan',
        'status',
        'id_kecamatan',
        'user_id'
    ];

    //Relationships One To One
    //Sebuah aduan dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relationships Many To Many
    //Sebuah aduan dapat terkait dengan banyak tag, dan sebaliknya
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relationships One To Many
    //Sebuah aduan dapat memiliki banyak status
    public function status()
    {
        return $this->hasMany(AduanStatus::class, 'aduan_id');
    }
}
