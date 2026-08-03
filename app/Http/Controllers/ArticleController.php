<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::where('is_published', true);

        // Filter by category if provided
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        // Search functionality
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                    ->orWhere('konten', 'like', '%' . $request->search . '%');
            });
        }

        $articles = $query->latest()->paginate(10);

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // Hanya tampilkan artikel yang dipublikasikan
        if (!$article->is_published) {
            abort(404);
        }

        return view('articles.show', compact('article'));
    }
}
