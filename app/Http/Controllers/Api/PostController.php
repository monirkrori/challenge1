<?php

// app/Http/Controllers/Api/PostController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        return response()->json($this->postService->getAllPosts());
    }

    public function store(PostRequest $request)
    {
        $post = $this->postService->createPost($request->validated());
        return response()->json($post, 201);
    }

    public function show($id)
    {
        return response()->json($this->postService->getPostById($id));
    }

    public function update(PostRequest $request, $id)
    {
        $post = $this->postService->updatePost($id, $request->validated());
        return response()->json($post);
    }

    public function destroy($id)
    {
        $this->postService->deletePost($id);
        return response()->json(['message' => 'Post deleted']);
    }
}
