<?php

use Illuminate\Database\Seeder;
use App\Models\KategoriBerita as Kategori;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Kategori::truncate();

        $categories = ['Umum', 'Akademik', 'Pengumuman', 'Prestasi', 'Lain lain'];
        $collection = collect($categories);

        $collection->each(function($c){
            Kategori::create([
                'kategori' => $c,
                'slug' => Str::slug($c)
            ]);
        });

        Schema::enableForeignKeyConstraints();

    }
}
