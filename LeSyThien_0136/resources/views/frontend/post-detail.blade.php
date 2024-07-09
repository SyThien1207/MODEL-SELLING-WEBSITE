
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
        }

        div.proLabel {
            padding: 20px;
            font-weight: bold;
            background-color: #f8f8f8;
            font-size: 1.5rem;
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

        @media (max-width: 600px) {

            .productImg,
            .productDetails {
                width: 100%;
            }
        }

        .qnty {
            padding: 2rem;
            font-size: 1.5rem;
        }

        .spanBtn {
            background-color: #e6e6e6;
            padding: 20px;
            margin: -5px;
            cursor: pointer;
        }

        .spanBtn:hover {
            background-color: #d3d3d3;
            padding: 20px;
            margin: -5px;
            cursor: pointer;
        }

        .spanBtnNo {
            background-color: #fff;
            padding: 20px;
            margin: -5px;
        }

        a {
            text-decoration: none;
        }

        div.body {
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


  <div class="main">
   

        <div class="proLabel">
            <span>
                Post Details
            </span>
        </div> 
        <!-- This Div for products details with image -->
        <div class="container">       
           

            <div class="wrapper">  
                <div class="productImg">
                    <!-- Product Image -->
                    <img 
                                       src="{{asset("images/post/".$post->image)}}"class="img-fluid"
                                        alt="{{$post->image}}">    
                </div>
                <div class="productDetails">
                    <div style="padding: 102px;">
                        <!-- Product Title -->
                        <div class="proLabel">
                            <span>{{$post->title}}</span>
                        </div>
                   
                        <hr style="opacity: .2;" />
                    
                       
                      
                    
                     
                    </div>
       

                </div>
            </div> 
        </div>
        <div class="container">
            <div class="body">
                <div style="background-color: #fff; padding: 1rem; margin: 1rem;">
                    <span style=" font-weight: bold;">Chi tiết bài viết</span><br />
                    <div style="padding: 1rem;">
                        <p>{{$post->detail}}</p>
                    </div>
                </div>
                <div style="background-color: #fff; padding: 1rem; margin: 1rem;">
                    <span style=" font-weight: bold;">Bài viết liên quan</span><br />
                    <div style="padding: 1rem;">
                        <div class="wrapper">
                        <div class="blog">

<div class="container">

  <div class="blog-container has-scrollbar">
  @foreach ($post_list as $post_item)

    <div class="blog-card">

      <a href="#">
        <img  src="{{asset("images/post/".$post_item->image)}}"alt="{{$post_item->image}}"width="300"  class="blog-banner">
  
    </a>

      <div class="blog-content">

        <a  class="blog-category">{{$post_item->topic_name}}</a>

        <a href="/chi-tiet-bai-viet/{{$post_item->id}}">
          <h3 class="blog-title">{{$post_item->title}}</h3>
        </a>

        <p class="blog-meta">
         <time datetime="2022-04-06">{{$post_item->created_at}}</time>
        </p>

      </div>

    </div>
    @endforeach


  </div>

</div>

</div>
                        </div>
                    </div>
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