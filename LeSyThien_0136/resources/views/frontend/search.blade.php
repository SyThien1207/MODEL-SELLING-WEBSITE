<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('./public/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('./public/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('./public/css/style-prefix.css') }}"> 
  <link rel="stylesheet" href="{{ asset('./public/css/style2.css') }}"> 
  <script src="{{ asset('./public/jquery/jquery-3.7.0.min.js') }}"></script>
 

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>



  <!--
    - MODAL
  -->







  <!--
    - HEADER
  -->

<x-header/>


  <!--
    - MAIN
  -->


  <main>

<div class="product-container">

  <div class="container">


    <x-product-category-home />



    <div class="product-box">

      <div class="product-main">
      <span>
  <h2 class="title">
    <div class="title-container">
     Sản phẩm bạn cần
    </div>


  </h2>
</span>

<div class="container">

   
<div class="product-mains">
 
    <div class="product-grids">
      
    <div class="products">
        
             <div class="product-grid">
             @foreach ($product as $product_item)
<div class="col-md">
<x-product-card :productitem="$product_item"/>
</div>  
@endforeach
    </div>{{$product->links()}}

               </div>
              
</div>
    </div>
</div>

      
  
 
             
         </div>


    </div>


    
  </div>

</div>







<!--
  - BLOG
-->



</main>





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