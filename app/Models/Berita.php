<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use SoftDeletes;
    protected $table = 'berita';
    protected $perPage = 10;        //override pagination count
    protected $fillable = [
        'kategori_berita_id',
        'user_id',
        'judul',
        'slug',
        'gambar_berita',
        'berita',
        'publikasi'
    ];
    protected $casts = [
        'kategori_berita_id' => 'integer',
        'user_id' => 'integer',
        'publikasi' => 'integer'
    ];


    //relasi
}
