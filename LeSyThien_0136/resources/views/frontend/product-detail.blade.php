<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anon - eCommerce Website</title>
    <!--
    - favicon
  -->

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('./public/css/style-prefix.css') }}">

    <script src="{{ asset('./public/jquery/jquery-3.7.0.min.js') }}"></script>
    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <style>
body {
    margin: 0 auto;
    font-family: sans-serif;
}

.container {
    width: 90%;
    margin: auto;
}

.productImg {
    float: left;
    width: 50%;
}

.productImg img {
    height: 500px;
    width: 500px;
}

.productDetails {
    background-color: #f8f8f8;
    float: left;
    width: 50%;
    border-radius: 6px;
    padding: 20px;
    box-sizing: border-box;
}

.proLabel {
    padding: 10px;
    font-weight: bold;
    background-color: #f8f8f8;
    font-size: 1.5rem;
}

.price-box {
    padding: 1.5rem 0;
}

.price-box .price, 
.price-box del {
    display: block;
    font-size: 1.2rem;
}

.description {
    padding: 10px 0;
}

.qnty {
    display: flex;
    align-items: center;
    font-size: 1.2rem;
}

.qnty .spanBtnNo {
    width: 60px;
    height: 38px;
    text-align: center;
    margin-right: 10px;
    border-radius: 5px;
    border: 1px solid #ced4da;
}

.qnty .btn {
    height: 38px;
    line-height: 1.5;
    font-size: 16px;
    border-radius: 5px;
}

.qnty .btn-success {
    background-color: #28a745;
    border-color: #28a745;
    width: 95;
}

.qnty .btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

@media (max-width: 600px) {
    .productImg,
    .productDetails {
        width: 100%;
    }
}

.wrapper {
    padding: 20px;
    overflow: hidden;
}

.left,
.right {
    width: 50%;
    float: left;
}

a {
    text-decoration: none;
}

.body {
    background-color: #f8f8f8;
    padding: 10px;
}

.pos {
    width: 24%;
    float: left;
}

.posBody {
    padding: 10px;
    margin: 1px;
    text-align: center;
    cursor: pointer;
}

.posBody:hover {
    background-color: #d3d3d3;
    padding: 10px;
    margin: 1px;
    text-align: center;
    transition-duration: 2s;
}

@media (max-width: 600px) {
    .pos {
        width: 50%;
    }
}
</style>
</head>

<body>


    <x-header />


    <!--
    - MAIN
  -->


    <div class="main">


        <div class="proLabel">
            <span>
                Product Details
            </span>
        </div>
        <!-- This Div for products details with image -->
        <div class="container">


            <div class="wrapper">
                
                <div class="productImg">
                    <!-- Product Image -->
                    <img src="{{asset("images/product/".$product->image)}}" class="img-fluid" alt="{{$product->image}}">
                </div>
                <div class="productDetails">
    <div style="padding: 102px;">
        <!-- Product Title -->
        <div class="proLabel">
            <span>{{$product->name}}</span>
        </div>
        <hr style="opacity: .2;" />
        <div class="price-box">
            @if($product->pricesale)
            <p class="price"> Giá sản phẩm: {{ number_format($product->pricesale) }} vnd</p>
            <del>Giá sản phẩm: {{ number_format($product->price )}} vnd</del>
            @else
            <p class="price">Giá sản phẩm: {{number_format( $product->price )}} vnd</p>
            @endif
        </div>
        <hr style="opacity: .2;" />
        <div class="description">
            {{$product->description}}
        </div>
        <hr style="opacity: .2;" />
        <div class="qnty">
            Số lượng: 
            <input class="spanBtnNo" type="number" value="1" min="0" aria-describedby="basic-addon2" id="qty">
            <button class="btn btn-success px-3" onclick="handleAddCart({{$product->id}})">Đặt hàng</button>
        </div>
    </div>
</div>
            </div>
        </div>
        <div class="container">
            <div class="body">
                <div style="background-color: #fff; padding: 1rem; margin: 1rem;">
                    <span style=" font-weight: bold;">Chính sách mua hàng</span><br />
                    <div style="padding: 1rem;">
                        <span>Pokhara Valley: </span><span style="color: red;">Free</span><br />
                        <span>Outside Valley: </span><span style="color: red;">Rs. 180</span><br /><br />
                        <span>Your Product will be in your door within 3 - 7 Days.</span><br />
                        <span>Note: Cash on Delivery is avaible</span>
                    </div>
                </div>


                <div style="background-color: #fff; padding: 1rem; margin: 1rem;">
                    <span style=" font-weight: bold;">Thông tin sản phẩm</span><br />
                    <div style="padding: 1rem;">
                        <p>{{$product->detail}}</p>
                    </div>
                </div>


                <div style="background-color: #fff; padding: 1rem; margin: 1rem;">
                    <span style=" font-weight: bold;">Sản phẩm cùng loại</span><br />
                    <div style="padding: 1rem;">
                        <div class="wrapper">
                            @foreach ($product_list as $products)


                            <div class="pos">
                                <div class="posBody">
                                    <img src="{{asset("images/product/".$products->image)}}" class="img-fluid" alt="{{$products->image}}"width="60px">
                                    <a href="/chi-tiet-san-pham/{{$products->id}}">
                                    <p>{{$products->name}}</p></a>
                                    <p style="color: red;">{{number_format($products->price)}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>




    <!--
    - FOOTER
  -->

    <x-footer />






    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="{{ asset('public/js/script.js') }}"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        function handleAddCart(productid) {
            let qty = document.getElementById("qty").value;
            $.ajax({
                url: "{{ route('cart.addcart') }}",
                type: "GET",
                data: {
                    productid: productid,
                    qty: qty
                },
                success: function(result, status, xhr) {
                    alert(result);
                },
                error: function(xhr, status, error) {
                    alert(error);
                }
            });
        }
    </script>
</body>

</html>