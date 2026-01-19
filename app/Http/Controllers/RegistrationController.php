<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        // Silakan sesuaikan field sesuai kebutuhan PPDB.
        $data = $request->validate([
            'nama_lengkap' => ['required','string','max:150'],
            'nisn'         => ['nullable','string','max:20'],
            'email'        => ['required','email','max:150'],
            'no_hp'        => ['nullable','string','max:30'],
            'alamat'       => ['nullable','string','max:255'],
        ]);

        Registration::create($data);

        return redirect()->route('register')->with('success', 'Pendaftaran berhasil disimpan.');
    }
}
