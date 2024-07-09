<div class="product-grid">

    <div class="product-main">
        <h2 class="title">
            <a class="custom-btn btn-12">
                <span>Product new!</span>

                <span>Sản phẩm mới</span>
            </a>

        </h2>
        </h2>
        <div class="product-grid">

            <div class="products">
                <div class="product-grid">
                    @foreach ($product_new as $product_item)
                    <div class="col-md">
                        <x-product-card :productitem="$product_item" />
                    </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>

</div>
