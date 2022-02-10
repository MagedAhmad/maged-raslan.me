<?php

namespace App\Http\Controllers;

use Wink\WinkPage;

class HomeController extends Controller
{
    public function projects()
    {
        $page = WinkPage::where('title', 'projects')->first();

        return view('pages.show', compact('page'));
    }

    public function about()
    {
        $page = WinkPage::where('title', 'about')->first();

        return view('pages.show', compact('page'));
    }
}
