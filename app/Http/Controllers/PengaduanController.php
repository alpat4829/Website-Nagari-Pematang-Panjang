<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    // Tampilkan form pengaduan
    public function index()
    {
        return view('pengaduan.index');
    }

    // Simpan pengaduan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor'  => 'nullable|string|max:100',
            'no_hp'         => 'nullable|string|max:20',
            'alamat_jorong' => 'required|string',
            'kategori'      => 'required|in:infrastruktur,pelayanan,keamanan,lingkungan,sosial,lainnya',
            'judul'         => 'required|string|max:150',
            'isi_pengaduan' => 'required|string|min:20',
            'foto'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'persetujuan'   => 'required|accepted',
        ], [
            'alamat_jorong.required' => 'Mohon pilih jorong asal Anda.',
            'kategori.required'      => 'Mohon pilih kategori pengaduan.',
            'judul.required'         => 'Judul pengaduan wajib diisi.',
            'isi_pengaduan.required' => 'Isi pengaduan wajib diisi.',
            'isi_pengaduan.min'      => 'Isi pengaduan minimal 20 karakter.',
            'foto.image'             => 'File harus berupa gambar.',
            'foto.max'               => 'Ukuran foto maksimal 2MB.',
            'persetujuan.required'   => 'Anda harus menyetujui pernyataan kebenaran data.',
            'persetujuan.accepted'   => 'Anda harus menyetujui pernyataan kebenaran data.',
        ]);

        // Handle upload foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('pengaduan', 'public');
        }

        // Generate nomor tiket
        $nomorTiket = Pengaduan::generateNomorTiket();

        // Simpan ke database
        $pengaduan = Pengaduan::create([
            'nama_pelapor'  => $validated['nama_pelapor'] ?? null,
            'no_hp'         => $validated['no_hp'] ?? null,
            'alamat_jorong' => $validated['alamat_jorong'],
            'kategori'      => $validated['kategori'],
            'judul'         => $validated['judul'],
            'isi_pengaduan' => $validated['isi_pengaduan'],
            'foto'          => $fotoPath,
            'nomor_tiket'   => $nomorTiket,
            'status'        => 'diterima',
        ]);

        return redirect()->route('pengaduan.sukses', ['tiket' => $pengaduan->nomor_tiket]);
    }

    // Halaman sukses setelah submit
    public function sukses(Request $request)
    {
        $tiket = $request->query('tiket');
        if (!$tiket) {
            return redirect()->route('pengaduan.index');
        }
        return view('pengaduan.sukses', compact('tiket'));
    }

    // Cek status pengaduan berdasarkan nomor tiket
    public function cek(Request $request)
    {
        $pengaduan = null;
        $error     = null;

        if ($request->has('tiket') && $request->tiket) {
            $pengaduan = Pengaduan::where('nomor_tiket', strtoupper(trim($request->tiket)))->first();
            if (!$pengaduan) {
                $error = 'Nomor tiket tidak ditemukan. Pastikan nomor tiket yang Anda masukkan benar.';
            }
        }

        return view('pengaduan.cek', compact('pengaduan', 'error'));
    }
}
