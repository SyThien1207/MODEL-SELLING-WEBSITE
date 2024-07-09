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
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
      
      
        .content {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .hero {
            background: url('your-image-path.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }
        .hero p {
            font-size: 1.5em;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #333;
            color: #fff;
        }
        footer p {
            margin: 0;
        }
        .section-title {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .feature-list {
            list-style: none;
            padding: 0;
        }
        .feature-list li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }
        .feature-list li:before {
            content: '✔';
            position: absolute;
            left: 0;
            color: green;
        }
        .cta {
            text-align: center;
            margin: 20px 0;
        }
        .cta a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .cta a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <x-header/>
   
      
   
 

    <div class="container">
    <div class="content" id="return-policy">
    <h2 class="section-title">Chính Sách Mua Hàng</h2>

<h3>1. Quy Trình Mua Hàng:</h3>
<ul>
    <li>Đăng ký tài khoản: Bạn có thể đăng ký tài khoản trên trang web của chúng tôi hoặc mua hàng dưới dạng khách.</li>
    <li>Chọn sản phẩm: Duyệt qua danh mục sản phẩm và thêm các sản phẩm bạn muốn mua vào giỏ hàng.</li>
    <li>Thanh toán: Hoàn tất thanh toán bằng các phương thức thanh toán được chấp nhận trên trang web.</li>
    <li>Xác nhận đơn hàng: Bạn sẽ nhận được xác nhận đơn hàng qua email cung cấp khi thanh toán hoàn tất.</li>
</ul>

<h3>2. Chất Lượng Sản Phẩm:</h3>
<p>Chúng tôi cam kết cung cấp các sản phẩm với chất lượng tốt nhất. Mỗi sản phẩm đều được kiểm tra kỹ lưỡng trước khi đóng gói và gửi đến bạn.</p>

<h3>3. Điều Kiện Bảo Hành:</h3>
<ul>
    <li>Mọi sản phẩm được bảo hành theo đúng chế độ bảo hành của nhà sản xuất.</li>
    <li>Quý khách vui lòng lưu giữ hóa đơn mua hàng để có thể yêu cầu bảo hành khi cần thiết.</li>
</ul>

<h3>4. Phương Thức Giao Hàng:</h3>
<ul>
    <li>Chúng tôi sử dụng các dịch vụ vận chuyển uy tín để đảm bảo sản phẩm được giao đến bạn một cách nhanh chóng và an toàn.</li>
    <li>Các chi phí vận chuyển sẽ được tính toán và thông báo cụ thể trong quá trình thanh toán.</li>
</ul>

<h3>5. Hủy Đơn Hàng:</h3>
<p>Bạn có thể hủy đơn hàng trước khi sản phẩm được gửi đi. Vui lòng liên hệ với chúng tôi ngay để được hỗ trợ tốt nhất.</p>

<
</div>







        <div class="content" id="community">
            <h2 class="section-title">Tham Gia Cộng Đồng của Chúng Tôi</h2>
            <p>Tham gia cộng đồng của chúng tôi để kết nối với những người có cùng đam mê, chia sẻ kinh nghiệm và cập nhật những xu hướng mới nhất trong nhiếp ảnh. Hãy theo dõi chúng tôi trên các mạng xã hội để không bỏ lỡ bất kỳ thông tin hữu ích nào!</p>
            <div class="cta">
                <a href="{{route('contact.index')}}">Liên Hệ với Chúng Tôi</a>
            </div>
        </div>

        <div class="content" id="contact">
            <h2 class="section-title">Liên Hệ</h2>
            <p>Nếu bạn có bất kỳ câu hỏi hoặc cần hỗ trợ, xin đừng ngần ngại liên hệ với chúng tôi. Đội ngũ hỗ trợ khách hàng của chúng tôi luôn sẵn sàng giúp đỡ bạn bất cứ lúc nào. Bạn có thể liên hệ với chúng tôi qua email, điện thoại hoặc mạng xã hội.</p>
            <p><strong>Email:</strong> lesythien2003@gmail.com</p>
            <p><strong>Điện thoại:</strong> +84 123 456 789</p>
            <p><strong>Địa chỉ:</strong> 123 Đường ABC, Quận XYZ, Thành phố HCM, Việt Nam</p>
        </div>
    </div>

    <x-footer/>
</body>
</html>
