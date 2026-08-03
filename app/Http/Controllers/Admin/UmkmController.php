<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::latest()->paginate(10);
        return view('admin.umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp' => 'nullable|string|max:20',
            'instagram' => 'nullable|url',
            'is_active' => 'boolean',
        ]);

        // Generate slug
        $validated['slug'] = Str::slug($validated['nama']);

        // Handle image upload
        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('umkm', 'public');
        }

        Umkm::create($validated);

        return redirect()->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil ditambahkan!');
    }

    public function show(Umkm $umkm)
    {
        return view('admin.umkm.show', compact('umkm'));
    }

    public function edit(Umkm $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, Umkm $umkm)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp' => 'nullable|string|max:20',
            'instagram' => 'nullable|url',
            'is_active' => 'boolean',
        ]);

        // Update slug if name changed
        if ($validated['nama'] !== $umkm->nama) {
            $validated['slug'] = Str::slug($validated['nama']);
        }

        // Handle image upload
        if ($request->hasFile('gambar')) {
            // Delete old image
            if ($umkm->gambar) {
                Storage::disk('public')->delete($umkm->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('umkm', 'public');
        }

        $umkm->update($validated);

        return redirect()->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil diperbarui!');
    }

    public function destroy(Umkm $umkm)
    {
        // Delete image if exists
        if ($umkm->gambar) {
            Storage::disk('public')->delete($umkm->gambar);
        }

        $umkm->delete();

        return redirect()->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil dihapus!');
    }
}
