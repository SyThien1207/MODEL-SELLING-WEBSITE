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
    <h1>gio hang</h1>
    <form action="{{route('cart.update')}}" method="post">
        @csrf
    <table class="table table-bordered">
        <thead>
            <tr>
              
                <th>id</th>
                <th style="width:90px;">hinh</th>
                <th>ten san pham</th>
                <th>sô lượng</th>
                <th>gia</th>
                <th>Thành tiền</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
            $totalMoney=0;
            @endphp
            @foreach ($list_cart as $row_cart)
            <tr>
                <td>{{$row_cart['id']}}</td>
                <td><img class="img-fluid" src="{{asset('images/product/'.$row_cart['image'])}}" alt="{{$row_cart['image']}}"style="width:90px;"></td>
                <td>{{$row_cart['name']}}</td>
                <td> <input type="number" style="width:60px" min="0" name="qty[{{$row_cart['id']}}]" value="{{ $row_cart['qty'] }}">
                </td>
                <td>{{number_format($row_cart['price'])}} vnd</td>
                <td>{{number_format($row_cart['price']*$row_cart['qty'])}} vnd</td>
<td class="text-center"><a href="{{route('cart.detele',['id'=>$row_cart['id']])}}" class="btn btn-danger btn-sm ">X</a></td>
           
            </tr>
            @php
            $totalMoney +=$row_cart['price']*$row_cart['qty'] 
            @endphp
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4">
                    <a class="btn btn-success px-3" href="{{route('product.index')}}">mua thêm

                    </a> 
                <button type="submit" class="btn btn-primary px-3">Cập nhật</button>
                <a class="btn btn-info px-3" href="{{route('cart.checkout')}}">thanh toán</a>
                </th>
                <th colspan="3" class="text-end">
                    <strong>Tổng tiền: {{number_format($totalMoney )}}</strong>
                </th>
            </tr>
        </tfoot>
    </table>
    </form>
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