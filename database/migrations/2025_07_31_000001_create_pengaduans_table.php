<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();

            // Identitas Pelapor (opsional — mendukung pengaduan anonim)
            $table->string('nama_pelapor')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('alamat_jorong')->nullable();

            // Isi Pengaduan
            $table->string('judul');
            $table->enum('kategori', [
                'infrastruktur',
                'pelayanan',
                'keamanan',
                'lingkungan',
                'sosial',
                'lainnya',
            ]);
            $table->text('isi_pengaduan');
            $table->string('foto')->nullable();

            // Tracking
            $table->string('nomor_tiket')->unique();
            $table->enum('status', [
                'diterima',
                'diproses',
                'selesai',
                'ditolak',
            ])->default('diterima');
            $table->text('catatan_admin')->nullable();

            $table->timestamps();

            $table->index(['status', 'created_at']);
            $table->index('nomor_tiket');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
};
