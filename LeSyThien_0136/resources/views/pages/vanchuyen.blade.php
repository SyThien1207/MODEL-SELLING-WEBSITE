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
    <div class="content" id="shipping-policy">
    <h2 class="section-title">Chính Sách Vận Chuyển</h2>
    <p>Chúng tôi cam kết cung cấp dịch vụ vận chuyển đáng tin cậy và nhanh chóng để đảm bảo sản phẩm của bạn được giao đến một cách an toàn và kịp thời. Vui lòng tham khảo các điều khoản và điều kiện sau đây:</p>
    
    <h3>1. Phạm Vi Vận Chuyển:</h3>
    <ul>
        <li>Chúng tôi cung cấp dịch vụ vận chuyển đến hầu hết các địa điểm trên toàn quốc và quốc tế (nếu có).</li>
        <li>Để biết thêm chi tiết về phạm vi vận chuyển, vui lòng liên hệ với chúng tôi qua email hoặc điện thoại.</li>
    </ul>
    
    <h3>2. Phương Thức Vận Chuyển:</h3>
    <p>Chúng tôi sử dụng các dịch vụ vận chuyển uy tín để đảm bảo sản phẩm của bạn được giao đến một cách an toàn và nhanh chóng. Các phương thức vận chuyển có thể bao gồm:</p>
    <ul>
        <li>Giao hàng nhanh: Đảm bảo sản phẩm đến tay bạn trong thời gian ngắn nhất có thể.</li>
        <li>Giao hàng tiêu chuẩn: Dịch vụ vận chuyển thông thường với thời gian giao hàng dự kiến.</li>
    </ul>
    
    <h3>3. Chi Phí Vận Chuyển:</h3>
    <p>Chi phí vận chuyển sẽ được tính toán dựa trên địa chỉ giao hàng của bạn và trọng lượng của sản phẩm. Chi tiết về chi phí vận chuyển sẽ được hiển thị trong quá trình thanh toán trước khi hoàn tất đơn hàng.</p>
    
    <h3>4. Thời Gian Giao Nhận:</h3>
    <p>Thời gian giao nhận sản phẩm sẽ phụ thuộc vào phương thức vận chuyển bạn đã chọn và địa chỉ giao hàng của bạn. Chúng tôi sẽ cung cấp thông tin cụ thể về thời gian giao hàng trong quá trình thanh toán.</p>
    
    <h3>5. Trách Nhiệm Trong Quá Trình Vận Chuyển:</h3>
    <p>Chúng tôi cam kết đảm bảo sản phẩm của bạn được đóng gói cẩn thận và an toàn trước khi giao cho dịch vụ vận chuyển. Tuy nhiên, chúng tôi không chịu trách nhiệm về các vấn đề phát sinh trong quá trình vận chuyển như thất lạc, hư hỏng do vận chuyển hoặc chậm trễ giao hàng từ phía dịch vụ vận chuyển.</p>
    
    <p>Chúng tôi luôn cố gắng hết sức để đảm bảo bạn nhận được sản phẩm của mình một cách an toàn và kịp thời. Nếu bạn có bất kỳ câu hỏi nào về Chính Sách Vận Chuyển của chúng tôi, xin vui lòng liên hệ với chúng tôi để được hỗ trợ.</p>
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
