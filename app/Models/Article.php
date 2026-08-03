<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'kategori',
        'slug',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    protected static function booted()
    {
        static::creating(function ($article) {
            if (empty($article->slug)) {
                $article->slug = Str::slug($article->judul);
            }
        });

        static::updating(function ($article) {
            if ($article->isDirty('judul')) {
                $article->slug = Str::slug($article->judul);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeArtikel($query)
    {
        return $query->where('kategori', 'artikel');
    }

    public function scopeBerita($query)
    {
        return $query->where('kategori', 'berita');
    }
}   