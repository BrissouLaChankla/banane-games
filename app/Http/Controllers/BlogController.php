<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BlogController extends Controller
{

    public function showBlog() {
        $articles = Article::all();
        return view('blog.index')->with([
            'articles' => $articles
        ]);
    }

    public function showArticle() {
        return view('articles.index');
    }
}
