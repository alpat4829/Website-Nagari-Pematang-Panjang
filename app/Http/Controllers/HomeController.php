<?php

// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Gallery;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data untuk homepage dengan default empty collection jika tidak ada
        $featuredUmkm = Umkm::where('is_active', true)
            ->latest()
            ->take(6)
            ->get();

        $recentGallery = Gallery::latest()
            ->take(6)
            ->get();

        $recentArticles = Article::where('is_published', true)
            ->latest()
            ->take(3)
            ->get();

        return view('home', [
            'umkms' => $featuredUmkm,
            'galleries' => $recentGallery,
            'articles' => $recentArticles
        ]);
    }
}
