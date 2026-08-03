<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use App\Models\Gallery;
use App\Models\Article;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'umkm_count'       => Umkm::count(),
            'active_umkm'      => Umkm::where('is_active', true)->count(),
            'gallery_count'    => Gallery::count(),
            'article_count'    => Article::count(),
            'pengaduan_count'  => Pengaduan::count(),
            'pengaduan_baru'   => Pengaduan::where('status', 'diterima')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
