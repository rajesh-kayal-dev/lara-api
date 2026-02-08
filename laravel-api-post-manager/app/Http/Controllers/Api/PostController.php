<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        return Post::with('user:id,name,email')
            ->latest()
            ->paginate(5);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'skills' => 'array'
        ]);

        $post = $request->user()->posts()->create($data);

        return response()->json([
            'message' => 'Post created',
            'post' => $post
        ], 201);
    }

    public function show(Post $post)
    {
        return $post->load('user:id,name,email');
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $post->update($request->only('title', 'description', 'skills'));

        return response()->json([
            'message' => 'Post updated',
            'post' => $post
        ]);
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return response()->json([
            'message' => 'Post deleted'
        ]);
    }
}
