<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PostResource;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // use SoftDeletes;

    public function index()
    {
        return PostResource::collection(Post::latest()->paginate());
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'message' => 'Post Deleted'
        ], 204);
    }
}
