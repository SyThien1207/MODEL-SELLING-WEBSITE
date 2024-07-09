


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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <style>
  .title-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 120%;
}






</style>
</head>

<body>


<x-header/>


  <!--
    - MAIN
  -->


  <div class="main">
   
  <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->
<x-post-topic/>
<div class="product-box">
    <div class="product-main">

    <span>
  <h2 class="title">
  <div class="title-container">
    {{$top->name}}  
    <form action=""  class="form-inline">
  <div class="header-search-container">
    <input type="search" name="key"  class="search-field" placeholder="Enter your product name...">
    <button class="search-btn">
        <ion-icon name="search-outline"></ion-icon>
      </button>
  </div>
</form>
</div>

  </h2>
</span>

        <div class="product-grid">
            @foreach ($list as $post)
            <div class="showcase">

                <div class="showcase-banner">

                    <img src="{{asset("images/post/".$post->image)}}" alt="{{$post->image}}" width="300" class="blog-banner">
                </div>

                <div class="showcase-content">

                    <a href="#" class="showcase-category">{{$post->topic_name}}</a>

                    <a href="/chi-tiet-bai-viet/{{$post->id}}">
                        <h3 class="blog-title">{{$post->title}}</h3>
                    </a>
                    <div class="showcase-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                        <ion-icon name="star-outline"></ion-icon>
                    </div>


                </div>

            </div>


            @endforeach

        </div>


    </div>
    {{$list->links()}}
</div>
 

</div>
</div>
</div>






  <!--
    - FOOTER
  -->

 <x-footer/>




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