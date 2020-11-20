<?php


namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $lastPosts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('home')->with([
            'sliders' => $sliders,
            'lastPosts' => $lastPosts
        ]);
    }
}
