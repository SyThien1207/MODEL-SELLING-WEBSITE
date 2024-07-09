<ul class="sidebar-menu-category-list">
  @foreach (  $listbrand as $rowbrand)

 
  <li class="sidebar-menu-category">
<button class="sidebar-accordion-menu" data-accordion-btn>

<div class="menu-title-flex">
                            <img src="{{ asset("images/brand/".$rowbrand->image) }}"
                                alt="{{ $rowbrand->image }}" width="20" height="20" class="menu-title-img">
                            <a href="/san-pham/{{ $rowbrand->slug }}" class="menu-title">{{ $rowbrand->name }}</a>
                        </div>
                    </button>
                </li>
       



@endforeach
       
  
 </ul>

   

