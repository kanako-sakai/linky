<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Illuminate\Support\Facades\Storage; //追加
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image; //追加

class BlogController extends Controller
{
    public function index()
    {
        $articles = Blog::orderBy('created_at', 'desc')->paginate(10);
        
        return view('blog.index', [
            'articles'=> $articles
        ]);
    }
    
    public function show(Request $request, $id)
    {
        $article = Blog::findOrFail($id);
        
        return view('blog.show',[
            'article'=>$article,
        ]);
    }
    
    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        
        return view('blog.create',[
            'categories' => $categories
        ]);
    }
    
     public function store(Request $request)
    {
        $request->validate([
            'title'=>['required', 'max:80'],
            'content'=>['required'],
            'category_id'=>['required', 'integer'],
        ],
        [
            'title.required'=>'タイトルを入力してください。',
            'title.max'=>'80文字以下にしてください。',
            'content.required'=> '本文を入力してください。',
            'category_id'=>'カテゴリーを指定してください。'
        ]);
        
        $article=new Blog();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->category_id = $request -> category_id;
        
        // 画像の保存
        $image = $request->file('picture');
        $path = Storage::disk('s3')->putFile("linkyprofilepictures", $image, 'public');
        $article->picture = Storage::disk('s3')->url($path);
        
        $article->save();
        
        return redirect('/blog');
    }
    
    public function edit($id)
    {
        $article=Blog::findOrFail($id);
        
        $categories = Category::all()->pluck('name', 'id');
        
        return view('blog.edit', [
            'article'=>$article,
            'categories'=>$categories
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>['required', 'max:80'],
            'content'=>['required'],
            'category_id'=>['required', 'integer'],
        ],
        [
            'title.required'=>'タイトルを入力してください。',
            'title.max'=>'80文字以下にしてください。',
            'content.required'=> '本文を入力してください。',
            'category_id'=>'カテゴリーを指定してください。'
        ]);
        
        $article=Blog::findOrFail($id);
        
        $article->title = $request->title;
        $article->content = $request->content;
        $article->category_id = $request->category_id;
        $article->save();
        
        return redirect()->route('blog.show', [
            'blog'=>$article->id,
        ]);
    }
    
    public function destroy($id)
    {
        $article = Blog::findOrFail($id);
         
        $article->delete(); 
         
        return redirect('/blog');
    }
}
