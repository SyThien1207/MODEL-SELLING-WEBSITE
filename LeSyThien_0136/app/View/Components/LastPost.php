<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LastPost extends Component
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
        $post_new=Post::where([['lst_post.status', '=', '1'],['type','=','post']])
        ->join('lst_topic', 'lst_post.topic_id', '=', 'lst_topic.id')
        ->join('lst_user', 'lst_post.created_by', '=', 'lst_user.id')
        ->orderBy('created_at', 'desc')
        ->select("lst_post.*", "lst_topic.name as topic_name", "lst_user.name as user_name","lst_topic.slug as topic_slug")

        ->limit(6)->get();
        return view('components.last-post',compact('post_new'));
    }
}
