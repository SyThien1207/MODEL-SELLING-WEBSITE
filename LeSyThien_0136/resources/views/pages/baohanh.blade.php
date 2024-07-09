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
    <div class="content" id="warranty-policy">
    <h2 class="section-title">Chính Sách Bảo Hành</h2>
    <p>Chúng tôi cam kết cung cấp dịch vụ bảo hành chuyên nghiệp để đảm bảo sự hài lòng của khách hàng. Vui lòng tham khảo các điều khoản và điều kiện sau đây:</p>
    
    <h3>1. Thời Gian Bảo Hành:</h3>
    <ul>
        <li>Mỗi sản phẩm sẽ được bảo hành trong khoảng thời gian quy định từ nhà sản xuất. Thời gian bảo hành cụ thể sẽ được ghi rõ trên hóa đơn mua hàng của bạn.</li>
        <li>Bảo hành bắt đầu từ ngày mua hàng và chỉ áp dụng cho các lỗi kỹ thuật do sản xuất.</li>
    </ul>
    
    <h3>2. Điều Kiện Bảo Hành:</h3>
    <ul>
        <li>Để yêu cầu bảo hành, vui lòng giữ lại hóa đơn mua hàng và chứng minh mua hàng của bạn.</li>
        <li>Sản phẩm phải được sử dụng đúng cách và bảo quản đúng hướng dẫn của nhà sản xuất.</li>
        <li>Bảo hành không áp dụng đối với các lỗi do sử dụng không đúng cách, sửa chữa tự ý hoặc tai nạn.</li>
    </ul>
    
    <h3>3. Quy Trình Yêu Cầu Bảo Hành:</h3>
    <ol>
        <li>Liên hệ với chúng tôi qua email hoặc điện thoại để thông báo về vấn đề của bạn.</li>
        <li>Chúng tôi sẽ hướng dẫn bạn về quy trình và cung cấp mẫu phiếu yêu cầu bảo hành nếu cần thiết.</li>
        <li>Gửi sản phẩm về cho chúng tôi để kiểm tra và xử lý.</li>
        <li>Sau khi xác nhận vấn đề là lỗi kỹ thuật từ nhà sản xuất, chúng tôi sẽ tiến hành sửa chữa hoặc thay thế sản phẩm tương tự.</li>
    </ol>
    
    <h3>4. Điều Khoản Bổ Sung:</h3>
    <ul>
        <li>Chúng tôi có quyền từ chối yêu cầu bảo hành nếu không đáp ứng đầy đủ các điều kiện và quy định trong Chính Sách Bảo Hành.</li>
        <li>Quyết định cuối cùng về việc bảo hành và thay thế sẽ do chúng tôi quyết định dựa trên điều kiện cụ thể của từng trường hợp.</li>
    </ul>
    
    <p>Chúng tôi luôn mong muốn mang đến cho bạn trải nghiệm mua sắm tốt nhất và sẵn sàng hỗ trợ nếu có bất kỳ vấn đề gì xảy ra liên quan đến bảo hành sản phẩm của bạn.</p>
</div>


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
