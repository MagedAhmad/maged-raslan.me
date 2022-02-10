<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;

class HomeController extends Controller
{
    public function projects()
    {
        $page = WinkPage::where('title', 'projects')->first();

        return view('pages.show', compact('page'));
    }
}
