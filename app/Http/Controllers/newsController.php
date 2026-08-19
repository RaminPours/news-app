<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class newscontroller extends Controller

{
    public function index()
    {
        // fetch nieuws van de newsapi.org
        $newsKey = env('API_KEY_NEWS');

        // fetch nieuws van de newsapi.org
        $techArticles = http::get('https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=' . $newsKey)->json();
        
        return view('news', [
            'techArticles' => $techArticles,
        ]);
    }

    public function business()
    {
        $newsKey = env('API_KEY_NEWS');
        $businessArticles = http::get('https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=' . $newsKey)->json();
        return view('business', [
            'businessArticles' => $businessArticles
        ]);
    }

    public function overige()
    {
        $newsKey = env('API_KEY_NEWS');
        $overigeArticles = http::get('https://newsapi.org/v2/everything?q=apple&from=2026-08-16&to=2026-08-16&sortBy=popularity&apiKey=' . $newsKey)->json();
        return view('overige', [
            'overigeArticles' => $overigeArticles
        ]);
    }
}