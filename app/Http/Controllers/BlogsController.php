<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::latest()->get();
        return view('blog.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $blog = Blog::create($input);
//        sync with categories
        if ($request->category_id) {
            $blog->categories()->sync($request->category_id);
        }

        return redirect('/blog');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);

        return redirect('/blog');
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('/blog');
    }

    public function trash()
    {
        $trashedBlogs = Blog::onlyTrashed()->get();
        return view('blog.trash', compact('trashedBlogs'));
    }

    public function restore($id)
    {
        $restoreBlog = Blog::onlyTrashed()->findOrFail($id);
        $restoreBlog->restore($restoreBlog);

        return redirect('/blog');
    }

    public function permanentDelete($id)
    {
        $blog = Blog::onlyTrashed()->findOrFail($id);
        $blog->forceDelete($blog);

        return redirect('/blog');
    }
}
