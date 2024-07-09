@if (count($listmenu)==0)
<li class="menu-category">
  <a class="menu-title" href="{{$menu_item->link}}">{{$menu_item->name}}</a>
</li>
@else

<li class="menu-category">
  <button class="accordion-menu" data-accordion-btn>

    <p class="menu-title">
      {{$menu_item->name}}
    </p>
    <div>
      <ion-icon name="add-outline" class="add-icon"></ion-icon>
      <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
    </div>
  </button>
  

    @foreach ($listmenu as $item)
    <ul class="submenu-category-list" data-accordion>
    <li class="submenu-category">

<a href="{{$item->link}}" class="submenu-title">{{$item->name}}</a>
</li>
  </ul>
    @endforeach

</li>

@endif
</ul>
</li>
</nav>