<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCategoryItem extends Component
{
    public $row_category;

    public function __construct($rowcategory)
    {
        $this->row_category = $rowcategory;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {  $category_item = $this->row_category;
        $args1 = [
            ['status', '=', 1],
            ['parent_id', '=', $category_item->id],
        ];
        $listcategory = Category::where($args1)->orderBy('sort_order', 'asc')->get();
        return view('components.product-category-item', compact('category_item', 'listcategory'));
    }
}
