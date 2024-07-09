<?php

namespace App\View\Components;

use App\Models\Post;
use App\Models\Topic;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostTopic extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $list = Topic::where('lst_topic.status', '=', 1)
            ->orderBy('lst_topic.created_at', 'desc')
            ->get();

        $post_list = Post::where('lst_post.status', '=', 1)

            ->orderBy('created_at', 'desc')

            ->get();
        return view("components.post-topic", compact("list", "post_list"));
    }
}
