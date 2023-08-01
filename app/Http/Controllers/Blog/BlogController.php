<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Builder;

class BlogController extends Controller{

    public function index(){

        $blogs = Blog::query()->orderByDesc('created_at');

        if(\request()->has('category')){

            $category = BlogCategory::query()->whereTranslation('title' , str_replace("_" , " " , \request()->category))->firstOrfail();

            $blogs = $blogs->whereHas('categories' ,  function (Builder $query) use($category) {
                $query->where('blog_category_id' , $category->id);
            });

        }

        if(\request()->has('search')){

            $search = request()->search;

            $blogs = $blogs->whereTranslation('title' , 'LIKE' ,"%$search%");
        }

        $blogs = $blogs->paginate(15);

        $blog_categories = BlogCategory::all();

        return view('blog.index', compact('blogs' , 'blog_categories'));
    }

    public function show($id){

        $blog = Blog::query()->whereTranslation('title', 'LIKE' ,str_replace("_", " ", $id) . "%" )->firstOrFail();

        return view('blog.show', compact('blog'));
    }


}
