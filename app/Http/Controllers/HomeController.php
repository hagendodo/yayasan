<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        $menus = About::all();
        $news = News::where('publish_status', true)->orderBy('published_at', 'desc')->limit(6)->get();
        $galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
        $sliders = Slider::limit(5)->get();
        return view('client.index', compact(['menus', 'news', 'galleries', 'sliders']));
    }

    public function news(Request $request): View
    {
        $menus = About::all();
        $news = News::paginate(12);
        return view('client.news', compact('news', 'menus'));
    }

    public function newsDetail(string $slug, Request $request): View
    {
        $menus = About::all();
        $news = News::with('user')->where('slug', $slug)->first();
        $currentNews = News::orderBy('published_at', 'desc')->limit(3)->get();
        return view('client.newsDetail', compact('news', ['news', 'currentNews', 'menus']));
    }

    public function galleries(Request $request): View
    {
        $menus = About::all();
        $galleries = Gallery::paginate(12);
        return view('client.galleries', compact('galleries', 'menus'));
    }

    public function pages($id): View
    {
        $menus = About::all();
        $data = About::where('id', $id)->first();
        return view('client.pages', compact('data', 'menus'));
    }
}
