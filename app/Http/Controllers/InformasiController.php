<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function profil()
    {
        return view('informasi.profil');
    }

    public function visiMisi()
    {
        return view('informasi.visi-misi');
    }

    public function strukturOrganisasi()
    {
        return view('informasi.struktur-organisasi');
    }
}
