<?php

namespace App\View\Components;

use App\Models\Brand;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductBrandHome extends Component
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
        $listbrand = Brand::where([
            ['status', '=', 1],
        ])->orderBy('sort_order', 'asc')->get();

        return view('components.product-brand-home',compact('listbrand'));
    }
}
