<!DOCTYPE html>
<html lang="en">

<thead>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Tiêu đề giao diện</title>
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="{{ asset('./public/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('./public/fontawesome/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('./public/css/backend.css') }}"> 
      <link rel="stylesheet" href="{{ asset('./public/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('./public/css/style-prefix.css') }}"> 
  <link rel="stylesheet" href="{{ asset('./public/css/style2.css') }}"> 
  <script src="{{ asset('./public/jquery/jquery-3.7.0.min.js') }}"></script>
      <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</thead>

<tbody>
 <x-header/>
  <div class="container">
    <h1>Sản phẩm yêu thích</h1>
    
    <table class="table table-bordered">
        <thead>
            <tr>
              
                <th>id</th>
                <th style="width:90px;">hinh</th>
                <th>ten san pham</th>
                <th>mua hàng</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          
            @foreach ($list_like as $row_like)
            <tr>
                <td>{{$row_like['id']}}</td>
                <td><img class="img-fluid" src="{{asset('images/product/'.$row_like['image'])}}" alt="{{$row_like['image']}}"style="width:90px;"></td>
                <td>{{$row_like['name']}}</td>
                <td class="text-center"><a href="{{route('product.product-detail',['id'=>$row_like['id']])}}" class="btn btn-success px-3 ">mua hàng</a></td>
                <td class="text-center"><a href="{{route('like.detele',['id'=>$row_like['id']])}}" class="btn btn-danger btn-sm ">X</a></td>
           
            </tr>
         
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
<x-footer/>
</tbody>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="{{ asset('public/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/js/backend.js') }}"></script>
<script src="{{ asset('public/js/script.js') }}"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        @if(Session::has('success'))<script>

            toastr.success("{!! Session::get('success')!!}");  
              </script>

        @endif

        @if(Session::has('error'))<script>

            toastr.error("{!! Session::get('error')!!}");  
              </script>

        @endif

</tbody>

</html>