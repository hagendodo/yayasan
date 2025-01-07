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
        $menus = About::where('publish_status', true)->get();
        $news = News::where('publish_status', true)->where('publish_status', true)->orderBy('published_at', 'desc')->limit(6)->get();
        $galleries = Gallery::where('publish_status', true)->orderBy('created_at', 'desc')->limit(6)->get();
        $sliders = Slider::where('publish_status', true)->limit(5)->get();
        return view('client.index', compact(['menus', 'news', 'galleries', 'sliders']));
    }

    public function news(Request $request): View
    {
        $menus = About::where('publish_status', true)->get();
        $news = News::where('publish_status', true)->paginate(12);
        return view('client.news', compact('news', 'menus'));
    }

    public function newsDetail(string $slug, Request $request): View
    {
        $menus = About::where('publish_status', true)->get();
        $news = News::with('user')->where('publish_status', true)->where('slug', $slug)->first();
        $currentNews = News::orderBy('published_at', 'desc')->limit(3)->get();
        return view('client.newsDetail', compact('news', ['news', 'currentNews', 'menus']));
    }

    public function galleries(Request $request): View
    {
        $menus = About::where('publish_status', true)->get();
        $galleries = Gallery::where('publish_status', true)->paginate(12);
        return view('client.galleries', compact('galleries', 'menus'));
    }

    public function pages($id): View
    {
        $menus = About::where('publish_status', true)->get();
        $data = About::where('publish_status', true)->where('id', $id)->first();
        return view('client.pages', compact('data', 'menus'));
    }
}
