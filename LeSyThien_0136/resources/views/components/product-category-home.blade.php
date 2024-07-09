<nav class="sidebar has-scrollbar" data-mobile-menu>
     
        <div class="sidebar-category">
            <div class="sidebar-top">
                <h2 class="sidebar-title">Danh mục sản phẩm</h2>
         
              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
        </button>
   </div> 

          
                @foreach ($listcategory as $rowcategory)
                <ul class="sidebar-menu-category-list">
                    <x-product-category-item :rowcategory="$rowcategory"/>
                    </ul>
                @endforeach
            
            
        </div>


        
        <div class="sidebar-category">
            <div class="sidebar-top">
                <h2 class="sidebar-title">Thương hiệu</h2>
            </div>
            <x-product-brand-home/>
        </div>
    </nav>