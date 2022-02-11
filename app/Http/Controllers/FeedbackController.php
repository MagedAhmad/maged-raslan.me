<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['email', 'required'],
        ]);

        Feedback::create(['email' => $request->email]);

        return redirect()->route('posts.index')->with(['feedback' => 'Thanks For subscribing !']);
    }
}
