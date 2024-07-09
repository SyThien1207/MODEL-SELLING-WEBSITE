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
   
        <h1>Chào mừng đến với Website Bán Ảnh của chúng tôi!</h1>
   
 

    <div class="container">
        <div class="hero">
            <h1>Khám Phá, Mua và Bán Ảnh Chất Lượng Cao</h1>
            <p>Nền tảng kết nối các nhiếp ảnh gia tài năng với những người yêu thích nghệ thuật nhiếp ảnh trên toàn thế giới.</p>
        </div>

        <div class="content" id="about">
            <h2 class="section-title">Giới Thiệu</h2>
            <p>Chúng tôi rất vui mừng được giới thiệu đến bạn một nền tảng tuyệt vời để khám phá, mua và bán các tác phẩm nhiếp ảnh chất lượng cao. Trang web của chúng tôi không chỉ là nơi để bạn tìm kiếm và mua những bức ảnh đẹp nhất mà còn là một cộng đồng kết nối các nhiếp ảnh gia tài năng với những người yêu thích nghệ thuật nhiếp ảnh trên toàn thế giới.</p>
        </div>

        <div class="content" id="features">
            <h2 class="section-title">Tại sao chọn chúng tôi?</h2>
            <ul class="feature-list">
                <li><strong>Chất lượng Hàng Đầu:</strong> Chúng tôi cam kết mang đến những bức ảnh với chất lượng tốt nhất. Mỗi bức ảnh đều được kiểm duyệt kỹ lưỡng để đảm bảo đạt tiêu chuẩn cao nhất về độ phân giải, màu sắc và chi tiết.</li>
                <li><strong>Đa Dạng Chủ Đề:</strong> Bạn có thể tìm thấy hàng ngàn bức ảnh thuộc nhiều chủ đề khác nhau như thiên nhiên, con người, kiến trúc, thời trang, thực phẩm, và nhiều hơn nữa.</li>
                <li><strong>Giá Cả Cạnh Tranh:</strong> Chúng tôi cung cấp các gói giá linh hoạt phù hợp với nhu cầu và ngân sách của mọi khách hàng, từ các cá nhân cho đến các doanh nghiệp.</li>
                <li><strong>Giao Dịch An Toàn:</strong> Hệ thống thanh toán của chúng tôi được mã hóa và bảo mật, đảm bảo mỗi giao dịch của bạn luôn an toàn và bảo mật.</li>
                <li><strong>Hỗ Trợ 24/7:</strong> Đội ngũ hỗ trợ khách hàng của chúng tôi luôn sẵn sàng giúp đỡ bạn bất cứ lúc nào, đảm bảo mọi vấn đề của bạn đều được giải quyết nhanh chóng và hiệu quả.</li>
            </ul>
        </div>

        <div class="content" id="for-photographers">
            <h2 class="section-title">Dành cho các Nhiếp Ảnh Gia</h2>
            <p>Nếu bạn là một nhiếp ảnh gia, trang web của chúng tôi là nơi lý tưởng để bạn chia sẻ và bán các tác phẩm của mình. Chúng tôi cung cấp:</p>
            <ul class="feature-list">
                <li><strong>Nền Tảng Tiếp Cận Toàn Cầu:</strong> Đưa tác phẩm của bạn đến với hàng triệu người trên toàn thế giới.</li>
                <li><strong>Tỷ Lệ Hoa Hồng Hấp Dẫn:</strong> Chúng tôi cung cấp tỷ lệ hoa hồng cạnh tranh, đảm bảo bạn nhận được phần xứng đáng từ mỗi giao dịch.</li>
                <li><strong>Công Cụ Quản Lý Tiện Ích:</strong> Hệ thống quản lý ảnh của chúng tôi giúp bạn dễ dàng tải lên, quản lý và theo dõi doanh thu từ các tác phẩm của mình.</li>
            </ul>
        </div>

        <div class="content" id="how-it-works">
            <h2 class="section-title">Cách Thức Hoạt Động</h2>
            <ol>
                <li><strong>Đăng Ký Tài Khoản:</strong> Nhanh chóng và dễ dàng. Chỉ cần vài phút để bạn có thể bắt đầu sử dụng mọi tính năng tuyệt vời của chúng tôi.</li>
                <li><strong>Khám Phá và Mua Sắm:</strong> Duyệt qua hàng ngàn bức ảnh, thêm vào giỏ hàng và hoàn tất thanh toán chỉ với vài cú nhấp chuột.</li>
                <li><strong>Tải Xuống Nhanh Chóng:</strong> Sau khi thanh toán, bạn có thể tải xuống các bức ảnh với chất lượng cao ngay lập tức.</li>
            </ol>
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
