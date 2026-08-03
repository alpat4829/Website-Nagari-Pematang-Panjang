<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(20);
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $validated['gambar'] = $request->file('gambar')->store('gallery', 'public');

        Gallery::create($validated);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Foto berhasil diupload!');
    }

    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($gallery->gambar) {
                Storage::disk('public')->delete($gallery->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('gallery', 'public');
        }

        $gallery->update($validated);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Foto berhasil diperbarui!');
    }

    public function destroy(Gallery $gallery)
    {
        // Delete image
        if ($gallery->gambar) {
            Storage::disk('public')->delete($gallery->gambar);
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Foto berhasil dihapus!');
    }
}
