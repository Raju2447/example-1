<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function getNewsIndex()
    {
        $news = News::with('comments')->get();

        return view('welcome',compact('news'));
    }
}
