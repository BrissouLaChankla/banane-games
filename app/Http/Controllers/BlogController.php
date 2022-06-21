<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
 
class BlogController extends Controller
{

    public function showBlog() {
        $articles = Article::latest()->limit(2)->get();
        return view('blog.index')->with([
            'articles' => $articles
        ]);
    }

    public function showArticle($slug) {
        $article = Article::where('slug', '=', $slug)->first();
        return view('articles.index')->with([
            'article' => $article
        ]);
    }



    // CRUD
    public function showCreate() {
        return view('admin.articles.create');
    }

    public function postCreateArticle(Request $request) {
        
        
        $nameImg = "ImageArticle-".Str::slug($request->title, '-').".webp";
        $destinationPath = public_path('img/articles/'.$namefile);
        $destinationPath = public_path('img/articles/small/'.$namefile);

        dd($altImg);


        $request->merge(['slug' => Str::slug($request->title, '-')]);
        $article = Article::create($request->all());
        return back();
    }

}
