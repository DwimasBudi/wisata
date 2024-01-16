<?php

namespace App\Http\Controllers;

use App\Models\Headline;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index', [
            'headline' => Headline::orderBy('id', 'asc')->get(),
        ]);
    }
}
