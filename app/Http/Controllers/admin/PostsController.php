<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\info;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category_id=null)
    {
        $all_posts = Posts::query();
        if (!empty($category_id)) {
            $all_posts->whereHas('categories', function ($query) use ($category_id) {
                $query->where('categories.id', $category_id);
            });
        }
        $posts = $all_posts->latest('updated_at')->paginate(15);
//        dd($posts);
        return view('admin.posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $all_posts = Posts::where('id', $id)->get();
        return view('admin.posts.index', ['posts'=>$all_posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post_details = Posts::where('id', $id)->first();
        return view('admin.posts.edit', ['post'=>$post_details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|min:15',
            'body' => 'required'
        ]);
        $post = Posts::findOrFail($id);
        $resp = $post->update([
            'title'=> $request->get('title'),
            'body'=> $request->get('body'),
        ]);
       return redirect('/admin/posts/'.$post->id)->with('flash', [
           'message' => $resp ? 'Post updated successfully' : 'Error updating post',
           'type' => $resp ? 'success' : 'danger',
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Posts::findOrFail($id);
        $post->delete();
        return redirect('/admin/posts/');
    }
}
