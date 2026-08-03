<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->enum('kategori', ['artikel', 'berita']);
            $table->longText('konten');
            $table->string('gambar')->nullable();
            $table->boolean('is_published')->default(false);
            $table->timestamps();

            $table->index(['is_published', 'created_at']);
            $table->index(['kategori', 'is_published']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
