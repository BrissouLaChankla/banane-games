<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
 

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
        
        
        $nameImg = "Image_Article-".Str::slug($request->title, '-').".webp";
        $destinationPath = public_path('img/articles/'.$nameImg);
        $destinationPathThumbnail = public_path('img/articles/thumbnail/'.$nameImg);

        // = Create the Image Object
        $image = Image::make($request->file('img_article'));
    
        // Crop and save 
        $image->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp', 100)->save($destinationPath)->save($destinationPathThumbnail);

        $request->merge(["thumbnail_img_url" => 'img/articles/thumbnail/'.$nameImg]);
        $request->merge(["header_img_url" => 'img/articles/'.$nameImg]);
        $request->merge(['slug' => Str::slug($request->title, '-')]);

        $article = Article::create($request->all());
        return back();
    }

}
