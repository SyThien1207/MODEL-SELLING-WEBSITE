<nav class="desktop-navigation-menu">
<li class="container">
  
<ul class="desktop-menu-category-list">
@if (count($listmenu)==0)
<li class="menu-category">
  <a class="menu-title" href="{{$menu_item->link}}">{{$menu_item->name}}</a>
</li>
@else

<li class="menu-category">
<a href="#" class="menu-title">
    {{$menu_item->name}}
  </a>
  <ul class="dropdown-list">
    @foreach ($listmenu as $item)
    <li class="dropdown-item"><a  href="{{$item->link}}">{{$item->name}}</a></li>
    @endforeach
  </ul>
</li>

@endif
</ul>
</li>
</nav>

