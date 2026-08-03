<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Umkm extends Model
{
    use HasFactory;

    protected $table = 'umkm';

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'gambar',
        'whatsapp',
        'instagram',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Automatically generate slug when creating
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($umkm) {
            if (empty($umkm->slug)) {
                $umkm->slug = Str::slug($umkm->nama);
            }
        });
    }

    // Route model binding by slug
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Accessor for WhatsApp URL
    public function getWhatsappUrlAttribute()
    {
        if ($this->whatsapp) {
            return 'https://wa.me/' . $this->whatsapp;
        }
        return null;
    }

    // Scope for active UMKM
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
