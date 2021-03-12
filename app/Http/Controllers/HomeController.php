<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('welcome', ['tours' => Tour::where('is_it_here',false)->where('lang', $this->getLang())->paginate(30), 'uzb' => Tour::where('lang', $this->getLang())->where('is_it_here', true)->paginate(30)]);

    }
    private function getLang()
    {
        if (!isset($_COOKIE['language'])) {
            return 'ru';
        }
        if (isset($_COOKIE['language'])) {
            return $_COOKIE['language'];
        }
    }
}
