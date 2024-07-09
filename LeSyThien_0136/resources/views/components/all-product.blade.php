<div class="container">

    <h2 class="title"><a class="custom-btn btn-12" href="{{route('product.index')}}">
            <span>Xem tất cả!</span>
            <span>Sản Phẩm</span>
        </a> </h2>
    <div class="product-mains">

        <div class="product-grids">

            <div class="products">

                <div class="product-grid">
                    @foreach ($all_product as $product_item)
                    <div class="col-md">
                        <x-product-card :productitem="$product_item" />
                    </div>
                    @endforeach
                </div>{{$all_product->links()}}

            </div>

        </div>
    </div>
</div>