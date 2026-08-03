<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::where('is_active', true)
            ->latest()
            ->paginate(12);

        return view('umkm.index', compact('umkms'));
    }

    public function show(Umkm $umkm)
    {
        // Hanya tampilkan UMKM yang aktif
        if (!$umkm->is_active) {
            abort(404);
        }

        return view('umkm.show', compact('umkm'));
    }
}
