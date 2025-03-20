<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestimoniSubmitted;

class TestimoniController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input testimoni
        $validated = $request->validate([
            'nama'   => 'required|string|max:255',
            'ulasan' => 'required|string',
        ]);

        // Kirim email ke admin
        // Pastikan Anda sudah mengatur email admin di file .env atau config/mail.php,
        // misalnya ADMIN_EMAIL=admin@example.com
        Mail::to(config('mail.admin_email'))->send(new TestimoniSubmitted($validated));

        // Kembalikan response ke user
        return redirect()->back()->with('success', 'Testimoni berhasil dikirim. Admin akan memeriksa dan memasukkannya secara manual.');
    }
}
