<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       
    }
    public function post_topic($slug)
    {
        $top = Topic::where('slug', $slug)->where('status', 1)->first();
        $productQuery  = Post::where('status', 1)->where('topic_id', '=', $top->id)
            ->where('type','=', 'post');
            if ($key = request()->key) {
                $productQuery->where('title', 'like', '%' . $key . '%');
            }
            $list=$productQuery
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view("frontend.post2", compact("list", "top"));
    }
    public function allpost()
    {
        $list = Topic::where('lst_topic.status', '!=', 0)
            ->orderBy('lst_topic.created_at', 'desc')
            ->get();

        $productQuery = Post::where([['lst_post.status', '=', 1],['type','=','post']]);
        if ($key = request()->key) {
            $productQuery->where('title', 'like', '%' . $key . '%');
        }
            $post_list=$productQuery->orderBy('created_at', 'desc')

            ->paginate(8);
        return view("frontend.post", compact("list", "post_list"));
    }


    public function post_detail(string $id)
    {
        $post = Post::find($id);
        $post_detail = Post::where([['lst_post.status', '=', 1], ['type', '=', 'post']])

            ->orderBy('created_at', 'desc')
            ->get();

        $list = Topic::where('status', '=', 1)
            ->get();




        $post_list = Post::where([['topic_id', '=', $post->topic_id], ['id', '!=', $post->id], ['lst_post.status', '=', 1]])

            ->orderBy('created_at', 'desc')

            ->orderBy('created_at')
            ->limit(4)
            ->get();
        return view("frontend.post-detail", compact("post", "post_list"));
    }
}
