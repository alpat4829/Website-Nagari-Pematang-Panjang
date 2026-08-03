<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';

    protected $fillable = [
        'nama_pelapor',
        'no_hp',
        'alamat_jorong',
        'judul',
        'kategori',
        'isi_pengaduan',
        'foto',
        'nomor_tiket',
        'status',
        'catatan_admin',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Label kategori untuk tampilan
    public function getLabelKategoriAttribute(): string
    {
        return match ($this->kategori) {
            'infrastruktur' => 'Infrastruktur',
            'pelayanan'     => 'Pelayanan',
            'keamanan'      => 'Keamanan',
            'lingkungan'    => 'Lingkungan',
            'sosial'        => 'Sosial',
            default         => 'Lainnya',
        };
    }

    // Label status untuk tampilan
    public function getLabelStatusAttribute(): string
    {
        return match ($this->status) {
            'diterima'  => 'Diterima',
            'diproses'  => 'Diproses',
            'selesai'   => 'Selesai',
            'ditolak'   => 'Ditolak',
            default     => 'Diterima',
        };
    }

    // Warna badge status
    public function getBadgeStatusAttribute(): string
    {
        return match ($this->status) {
            'diterima'  => 'bg-yellow-100 text-yellow-800',
            'diproses'  => 'bg-blue-100 text-blue-800',
            'selesai'   => 'bg-green-100 text-green-800',
            'ditolak'   => 'bg-red-100 text-red-800',
            default     => 'bg-gray-100 text-gray-800',
        };
    }

    // Scope: hanya yang belum dibaca (status diterima)
    public function scopeBaru($query)
    {
        return $query->where('status', 'diterima');
    }

    // Generate nomor tiket otomatis
    public static function generateNomorTiket(): string
    {
        $year    = date('Y');
        $lastId  = self::whereYear('created_at', $year)->count();
        $nextNum = str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        return "PP-{$year}-{$nextNum}";
    }
}
