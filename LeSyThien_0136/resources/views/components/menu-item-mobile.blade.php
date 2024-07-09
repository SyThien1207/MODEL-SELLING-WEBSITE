<ul class="mobile-menu-category-list">
@foreach ( $listmenu as $rowmenu )
        <x-main-menu-item-mobile :rowmenu="$rowmenu" />
        @endforeach
</ul>