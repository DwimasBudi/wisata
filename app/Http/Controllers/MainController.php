<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Kontak;
use App\Models\Gallery;
use App\Models\Facility;
use App\Models\Headline;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'headline' => Headline::orderBy('id', 'asc')->get(),
            'galleries' => Gallery::orderBy('id', 'asc')->get(),
            'fasilitas' => Facility::orderBy('id', 'asc')->get(),
            'about' => About::find(1),
            'kontak' => Kontak::find(1),
        ]);
    }
}
