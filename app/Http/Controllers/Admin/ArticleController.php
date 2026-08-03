<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|in:artikel,berita',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
        ]);

        // Generate slug
        $validated['slug'] = Str::slug($validated['judul']);

        // Handle image upload
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('articles', 'public');
        }

        Article::create($validated);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil disimpan!');
    }

    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|in:artikel,berita',
            'konten' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean',
        ]);

        // Update slug if title changed
        if ($validated['judul'] !== $article->judul) {
            $validated['slug'] = Str::slug($validated['judul']);
        }

        // Handle image upload
        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($article->gambar) {
                Storage::disk('public')->delete($article->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('articles', 'public');
        }

        $article->update($validated);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Article $article)
    {
        // Delete image if exists
        if ($article->gambar) {
            Storage::disk('public')->delete($article->gambar);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }
}