<div class="sidebar-category">

  <div class="sidebar-top">
    <h2 class="sidebar-title">Chủ đề</h2>

    <button class="sidebar-close-btn" data-mobile-menu-close-btn>
      <ion-icon name="close-outline"></ion-icon>
    </button>
  </div>

  <ul class="sidebar-menu-category-list">
  @foreach (  $list as $rowcategory )<nav class="desktop-navigation-menu">
    <li class="container">
        <ul class="desktop-menu-category-list">
         
                <li class="menu-category">
                    <button class="sidebar-accordion-menu" data-accordion-btn>
                        <div class="menu-title-flex">
                           
                            <a href="/bai-viet/{{ $rowcategory->slug }}" class="menu-title">{{ $rowcategory->name }}</a>
                        </div>
                    </button>
                </li>
        
        </ul>
    </li>
</nav>

@endforeach
       
  

   

  </ul>

</div>
