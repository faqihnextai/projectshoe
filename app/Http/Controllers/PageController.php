<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman Beranda (Home).
     */
    public function index()
    {
        return view('pages.home');
    }

    /**
     * Menampilkan halaman Layanan & Harga.
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Menampilkan halaman Tentang Kami.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Menampilkan halaman Kontak (sementara tanpa form logic).
     */
    public function contact()
    {
        return view('pages.contact');
    }
}