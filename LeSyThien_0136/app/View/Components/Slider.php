<?php

namespace App\View\Components;

use App\Models\Banner;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slider extends Component
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
        $list_banner = Banner::where([['position', '=', 'slideshow'], ['status', '=', '1']])-> orderBy('created_at','desc')->get();


        return view('components.slider',['components.header'],compact('list_banner'));
    }
   
}
