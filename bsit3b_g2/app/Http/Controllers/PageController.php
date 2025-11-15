<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function causes() {
        return view('pages.causes');
    }

    public function effects() {
        return view('pages.effects');
    }

    public function prevention() {
        return view('pages.prevention');
    }

    public function about() {
        return view('pages.about');
    }

    public function game() {
        return view('pages.game');
    }
}
