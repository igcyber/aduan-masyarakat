<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AduanStatus extends Model
{
    use HasFactory;

    //Mass-Assignable fields
    protected $fillable = [
        'aduan_id',
        'status',
        'daftar_desa',
        'keterangan',
    ];

    //Relationship One To Many
    public function aduan()
    {
        return $this->belongsTo(Aduan::class, 'aduan_id');
    }
}
