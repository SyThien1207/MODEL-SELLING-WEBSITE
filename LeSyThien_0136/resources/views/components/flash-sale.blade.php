<div class="product-grid">
    <div class="product-main">
        <h2 class="title">


        </h2>
        </h2>
        <div class="product-grid">

            <div class="products">
                <h2 class="title">
                    <a class="custom-btn btn-12">
                        <span>Products Sale</span>
                        <span>Sản phẩm khuyến mãi</span>

                    </a>
                </h2>
                <div class="product-grid">
                    @foreach ($product_sale as $product_item)
                    <div class="col-md">
                        <x-product-card :productitem="$product_item" />
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="product-box">


            </div>
        </div>

    </div>
</div>