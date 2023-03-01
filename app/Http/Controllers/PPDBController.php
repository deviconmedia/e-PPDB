<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Slider;
use App\Models\Informasi;
use App\Models\Jurusan;
class PPDBController extends Controller
{
    public function index()
    {
        $web        = Website::get()->first();
        $sliders    = Slider::where('is_active', 1)->get();
        $jurusans   = Jurusan::all();
        return view('welcome', compact('web', 'sliders', 'jurusans'));
    }

    // Change one frontend branch
    public function programStudi()
    {
        $web = Website::get()->first();
        $jurusans = Jurusan::all();
        return view('frontend.content.program_studi', compact('jurusans', 'web'));
    }

    public function alurPendaftaran()
    {
        $web = Website::get()->first();
        return view('frontend.content.alur', compact('web'));
    }

    public function pengumuman()
    {
        $web = Website::get()->first();
        $informasi = Informasi::where('status', 'aktif')->get();
        return view('frontend.content.pengumuman', compact('informasi', 'web'));
    }
}
