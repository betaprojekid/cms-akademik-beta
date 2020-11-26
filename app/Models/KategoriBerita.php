<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriBerita extends Model
{
    use SoftDeletes;

    protected $table = 'kategori_beritas';
    protected $fillable = [
        'kategori',
        'slug'
    ];

    // relationship
    public function berita(){
        return $this->hasMany(Berita::class, 'kategori_berita_id');
    }
}
