<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Validator;
 

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


// ADMIN
    // CRUD
    public function showCreate() {
        return view('admin.articles.create');
    }

    public function showAll() {
        $articles = Article::all();
        return view('admin.articles.all')->with([
            'articles' => $articles
        ]);
    }

    public function showEdit($slug) {
        $article = Article::where('slug', '=', $slug)->first();
        return view('admin.articles.edit')->with([
            'article' => $article
        ]);
    }


    public function postEditCreateArticle(Request $request) {


            $validator = Validator::make($request->all(), [
                'img_article' => 'image|mimes:jpeg,png,jpg,gif,webp',
                'title' => 'required|string|min:3|max:255',
                'description' => 'required|string|min:3|max:255',
                'content' => 'required|string|min:3'
            ]);
            
            if ($validator->fails()) {
                return redirect(url()->previous())->withErrors($validator)->withInput();
            } else {

            // génère le slug
            $request->merge(['slug' => Str::slug($request->title, '-')]);

            // Détect l'état du switch
            if($request->is_published) {
                $request->merge(['is_published' => 1]);
            } else {
                $request->merge(['is_published' => 0]);
            }
            
            // Détect si une image a été upload 
            if($request->hasFile('img_article')){
                $nameImg = "Image_Article-".Str::slug($request->title, '-').".webp";
                $destinationPath = public_path('img/articles/'.$nameImg);
                $destinationPathThumbnail = public_path('img/articles/thumbnail/'.$nameImg);

                // = Create the Image Object
                $image = Image::make($request->file('img_article'));
            
                // Crop and save 
                $image->resize(606, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode('webp', 100)->save($destinationPath)->fit(516, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPathThumbnail);

                $request->merge(["thumbnail_img_url" => 'img/articles/thumbnail/'.$nameImg]);
                $request->merge(["header_img_url" => 'img/articles/'.$nameImg]);
            }
        
            // Save Database Info
            
            if($request->id) {
                $article = Article::find($request->id);
                $article->update($request->all());
            } else {
                $article = Article::create($request->all());
            }
            
            return redirect()->route('show-all-articles');
        }
    }

    public function deleteArticle($id) {
        $article = Article::find($id);
        $article->delete();
    }

    
    public function editArticleFav($action, $id) {
        $article = Article::find($id);

        if($action === 'remove'){
            $article->update(['is_fav' => 0 ]);
        }
        else {
            $article->update(['is_fav' => 1 ]);
        }

    }

}
