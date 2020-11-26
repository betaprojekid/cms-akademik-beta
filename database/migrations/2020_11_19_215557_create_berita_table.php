<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_berita_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('gambar_berita')->nullable();
            $table->text('berita');
            $table->integer('publikasi')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('berita');
        Schema::enableForeignKeyConstraints();
    }
}
