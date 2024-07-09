<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Tiêu đề giao diện</title>
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="{{ asset('./public/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('./public/fontawesome/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('./public/css/backend.css') }}"> 
      <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
   <section class="hdl-header sticky-top">
      <div class="container-fluid">
         <ul class="menutop">
            <li>
               <a href="">
                  <i class="fa-brands fa-dashcube"></i> Shop Thời trang
               </a>
            </li>
            <li class="text-phai">
            <form id="logout-form" action="{{ route('website.logout') }}" method="post" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    <i class="fa-solid fa-power-off"></i> Thoát
</a>

            </li>
            <li class="text-phai">
               <a href="">
                  <i class="fa fa-user" aria-hidden="true"></i> Chào quản lý
               </a>
            </li>
         </ul>
      </div>
   </section>
   <section class="hdl-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-2 bg-dark p-0 hdl-left">
               <div class="hdl-left">
                  <div class="dashboard-name">
                     Bản điều khiển
                  </div>
                  <nav class="m-2 mainmenu">
                     <ul class="main">
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Sản phẩm</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="{{route('admin.product.index')}}">Tất cả sản phẩm</a>
                              </li>
                              <li>
                                 <a href="product_import.html">Nhập hàng</a>
                              </li>
                              <li>
                                 <a href="{{route('admin.category.index')}}">Danh mục</a>
                              </li>
                              <li>
                                 <a href="{{route('admin.brand.index')}}">Thương hiệu</a>
                              </li>
                              <li>
                                 <a href="product_sale.html">Khuyễn mãi</a>
                              </li>
                           </ul>
                        </li>
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Bài viết</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="{{route('admin.post.index')}}">Tất cả bài viết</a>
                              </li>
                              <li>
                                 <a href="{{route('admin.topic.index')}}">Chủ đề</a>
                              </li>
                              <li>
                                 <a href="page_index.html">Trang đơn</a>
                              </li>
                           </ul>
                        </li>
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Quản lý bán hàng</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="{{route('admin.order.index')}}">Tất cả đơn hàng</a>
                              </li>
                              <li>
                                 <a href="order_export.html">Xuất hàng</a>
                              </li>
                           </ul>
                        </li>
                        
                        <li class="hdlitem">
                           <i class="fa-regular fa-circle icon-left"></i>
                           <a href="{{route('admin.contact.index')}}">Liên hệ</a>
                        </li>
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Giao diện</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="{{route('admin.menu.index')}}">Menu</a>
                              </li>
                              <li>
                                 <a href="{{route('admin.banner.index')}}">Banner</a>
                              </li>
                           </ul>
                        </li>
                        <li class="hdlitem item-sub">
                           <i class="fa-brands fa-product-hunt icon-left"></i>
                           <a href="#">Hệ thống</a>
                           <i class="fa-solid fa-plus icon-right"></i>
                           <ul class="submenu">
                              <li>
                                 <a href="{{route('admin.user.index')}}">Thành viên</a>
                              </li>
                              <li>
                                 <a href="config_index.html">Cấu hình</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="col-md-10">
               <!--CONTENT  -->
              @yield('content')
               <!--END CONTENT-->
            </div>
         </div>
      </div>
   </section>
   <script src="{{ asset('public/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/js/backend.js') }}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        @if(Session::has('success'))<script>

            toastr.success("{!! Session::get('success')!!}");  
              </script>

        @endif

        @if(Session::has('error'))<script>

            toastr.error("{!! Session::get('error')!!}");  
              </script>

        @endif

</body>

</html>