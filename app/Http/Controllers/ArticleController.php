<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($id) {
        $articlesAll = Article::find($id);
        $articlesAll = json_decode(json_encode($articlesAll));

        return view('article', ['id'=>$id])->with(compact('articlesAll'));
    }
}
