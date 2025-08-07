<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|max:100',
            'email'   => 'required|email',
            'subject' => 'required|max:150',
            'message' => 'required|min:10',
        ]);

        // Kirim email atau simpan data ke DB (opsional)
        // Untuk contoh: hanya tampilkan notifikasi sukses
        return back()->with('success', 'Terima kasih sudah menghubungi kami!!!');
    }
}
