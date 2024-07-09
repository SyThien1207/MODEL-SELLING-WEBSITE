<?php

namespace App\View\Components;

use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItemMobile extends Component
{
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
   
        $listmenu = Menu::where([
            ['status', '=', 1],
            ['position', '=', 'MainMenu'],
            ['parent_id', '=', 0]
        ])->orderBy('sort_order', 'asc')->limit(6)->get();

        return view('components.main-menu', compact('listmenu'));
    }
}
