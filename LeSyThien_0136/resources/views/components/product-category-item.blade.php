@if (count($listcategory) == 0)

    <li class="sidebar-menu-category">

<button class="sidebar-accordion-menu" data-accordion-btn>
    <div class="menu-title-flex">
        <img src="{{ asset("images/category/".$category_item->image) }}" alt="{{ $category_item->image }}" width="20" height="20" class="menu-title-img">
        <a href="/san-pham/{{ $category_item->slug }}" class="menu-title">{{ $category_item->name }}</a>
    </div>
</button>
</li>


@else

    <li class="sidebar-menu-category">

        <button class="sidebar-accordion-menu" data-accordion-btn>
            <div class="menu-title-flex">
                <img src="{{ asset("images/category/".$category_item->image) }}" width="20" height="20" class="menu-title-img">
                <p class="menu-title">{{ $category_item->name }}</p>
            </div>
            <div>
                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
        </button>

        <ul class="sidebar-submenu-category-list" data-accordion>

            @foreach ($listcategory as $item)


            <li class="sidebar-submenu-category">
                <a href="/san-pham/{{ $item->slug }}" class="sidebar-submenu-title">
                    <p class="product-name">{{$item->name}}</p>
                </a>
            </li>


            @endforeach
        </ul>
    </li>

@endif