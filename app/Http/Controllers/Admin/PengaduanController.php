<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    // Daftar semua pengaduan
    public function index(Request $request)
    {
        $query = Pengaduan::latest();

        // Filter berdasarkan status
        if ($request->has('status') && $request->status !== 'semua') {
            $query->where('status', $request->status);
        }

        // Filter berdasarkan kategori
        if ($request->has('kategori') && $request->kategori !== 'semua') {
            $query->where('kategori', $request->kategori);
        }

        $pengaduans = $query->paginate(15);

        // Hitung per status untuk tab counter
        $counts = [
            'semua'     => Pengaduan::count(),
            'diterima'  => Pengaduan::where('status', 'diterima')->count(),
            'diproses'  => Pengaduan::where('status', 'diproses')->count(),
            'selesai'   => Pengaduan::where('status', 'selesai')->count(),
            'ditolak'   => Pengaduan::where('status', 'ditolak')->count(),
        ];

        return view('admin.pengaduan.index', compact('pengaduans', 'counts'));
    }

    // Detail pengaduan
    public function show(Pengaduan $pengaduan)
    {
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    // Update status pengaduan
    public function update(Request $request, Pengaduan $pengaduan)
    {
        $validated = $request->validate([
            'status'        => 'required|in:diterima,diproses,selesai,ditolak',
            'catatan_admin' => 'nullable|string|max:1000',
        ]);

        $pengaduan->update($validated);

        return redirect()
            ->route('admin.pengaduan.show', $pengaduan)
            ->with('success', 'Status pengaduan berhasil diperbarui.');
    }

    // Hapus pengaduan
    public function destroy(Pengaduan $pengaduan)
    {
        // Hapus foto jika ada
        if ($pengaduan->foto) {
            \Storage::disk('public')->delete($pengaduan->foto);
        }

        $pengaduan->delete();

        return redirect()
            ->route('admin.pengaduan.index')
            ->with('success', 'Pengaduan berhasil dihapus.');
    }
}
