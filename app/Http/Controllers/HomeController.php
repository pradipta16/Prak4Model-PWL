<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        Cache::rememberForever('articlesAll',function(){
            return Article::all();
        });
        $articlesAll = Cache::get('articlesAll');
        $articlesAll = json_decode(json_encode($articlesAll));
        return view('home')->with(compact('articlesAll'));    
    }
}
