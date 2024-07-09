<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Tiêu đề giao diện</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('public/fontawesome/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('public/css/backend.css') }}">
   <link rel="stylesheet" href="{{ asset('public/css/style-prefix.css') }}">
   <link rel="stylesheet" href="{{ asset('public/css/style2.css') }}">
   <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
   <script src="{{ asset('public/jquery/jquery-3.7.0.min.js') }}"></script>
</head>

<body>
    <x-header/>

    <div class="container">
        <h1>Thanh toan</h1>
        <div class="row">
            <div class="col-md-9">
                <form action="{{ route('cart.docheckout') }}" method="post">
                    @csrf
                    @method('post')
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th style="width:90px;">hinh</th>
                                <th>ten san pham</th>
                                <th>sô lượng</th>
                                <th>gia</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $totalMoney = 0;
                            @endphp
                            @foreach ($list_cart as $row_cart)
                                <tr>
                                    <td>{{ $row_cart['id'] }}</td>
                                    <td><img class="img-fluid" src="{{ asset('images/product/'.$row_cart['image']) }}" alt="{{ $row_cart['image'] }}" style="width:90px;"></td>
                                    <td>{{ $row_cart['name'] }}</td>
                                    <td><input type="number" style="width:60px" min="0" name="qty[{{ $row_cart['id'] }}]" value="{{ $row_cart['qty'] }}"></td>
                                    <td>{{ number_format($row_cart['price']) }} vnd</td>
                                    <td>{{ number_format($row_cart['price'] * $row_cart['qty']) }} vnd</td>
                                </tr>
                                @php
                                    $totalMoney += $row_cart['price'] * $row_cart['qty'];
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-3">
                        <strong>Tổng tiền: {{ number_format($totalMoney) }}</strong>
                    </div>

                    @if (!Auth::check())
                        <div class="col-12">
                            <h3>Hãy đăng nhập để thanh toán</h3>
                            <a href="{{ route('website.getlogin') }}">Đăng nhập</a>
                        </div>
                    @else
                        @php
                            $user = Auth::user();
                        @endphp
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Họ tên</label>
                                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>Điện thoại</label>
                                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Địa chỉ</label>
                                    <textarea name="address" class="form-control">{{ $user->address }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label>Chú thích</label>
                                    <input type="text" name="note" value="{{ $user->note }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 text-end">
                                <div class="mb-3">
                                    <button class="btn btn-success" type="submit">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <x-footer/>

    <script src="{{ asset('public/jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/js/script.js') }}"></script>
<script src="{{ asset('public/js/backend.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    @if(Session::has('success'))
        <script>
            toastr.success("{!! Session::get('success') !!}");
        </script>
    @endif

    @if(Session::has('error'))
        <script>
            toastr.error("{!! Session::get('error') !!}");
        </script>
    @endif

</body>

</html>
