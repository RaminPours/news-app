<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class newscontroller extends Controller

{
    public function index()
    {
        // fetch nieuws van de newsapi.org
        $newskey = env('API_KEY_NEWS');

        // fetch nieuws van de newsapi.org
        $techArticles = http::get('https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=' . $newskey);
        $businessArticles = http::get('https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=' . $newskey);
        $overigeArticles = http::get('https://newsapi.org/v2/everything?q=apple&from=2026-08-16&to=2026-08-16&sortBy=popularity&apiKey=' . $newskey);

        // decode de json data naar een array
        $techArticles = json_decode($techArticles, true);
        $businessArticles = json_decode($businessArticles, true);
        $overigeArticles = json_decode($overigeArticles, true);

        // dit is de data die we terug geven aan de view
        return view('news', [
            'techArticles' => $techArticles,
            'businessArticles' => $businessArticles,
            'overigeArticles' => $overigeArticles
        ]);
    }
}