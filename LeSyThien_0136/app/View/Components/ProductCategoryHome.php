<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCategoryHome extends Component
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
        $listcategory = Category::where([
            ['status', '=', 1],
            ['parent_id', '=', 0]
        ])->orderBy('sort_order', 'asc')->get();

        return view('components.product-category-home', compact('listcategory'));
    }
}
