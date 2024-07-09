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
    <h2 class="section-title">Chính Sách Đổi Trả</h2>
    <p>Chúng tôi cam kết cung cấp dịch vụ đổi trả linh hoạt và dễ dàng để đảm bảo sự hài lòng của khách hàng. Vui lòng đọc kỹ các điều khoản dưới đây trước khi yêu cầu đổi trả:</p>
    
    <h3>1. Điều Kiện Đổi Trả:</h3>
    <ul>
        <li>Sản phẩm có thể được đổi trả trong vòng 30 ngày kể từ ngày mua.</li>
        <li>Sản phẩm phải được giữ nguyên trong tình trạng ban đầu và không có dấu hiệu sử dụng hoặc hư hỏng.</li>
        <li>Để đảm bảo quyền lợi của bạn, vui lòng bảo quản hộp và phụ kiện đi kèm (nếu có) và giữ hóa đơn mua hàng.</li>
    </ul>
    
    <h3>2. Quy Trình Đổi Trả:</h3>
    <p>Để yêu cầu đổi trả, vui lòng thực hiện các bước sau:</p>
    <ol>
        <li>Liên hệ với chúng tôi qua email hoặc điện thoại để thông báo về yêu cầu đổi trả.</li>
        <li>Chúng tôi sẽ xem xét yêu cầu của bạn và cung cấp hướng dẫn cụ thể về quy trình đổi trả.</li>
        <li>Sau khi xác nhận đơn đổi trả, vui lòng gửi sản phẩm trở lại địa chỉ chúng tôi cung cấp.</li>
    </ol>
    
    <h3>3. Hoàn Tiền:</h3>
    <p>Chúng tôi cam kết hoàn tiền cho bạn trong vòng 7 ngày làm việc kể từ khi nhận được sản phẩm đổi trả và xác nhận điều kiện đúng quy định.</p>
    
    <h3>4. Chi Phí Vận Chuyển:</h3>
    <p>Các chi phí vận chuyển đổi trả sẽ không được hoàn lại và sẽ do khách hàng chịu.</p>
    
    <h3>5. Điều Khoản Bổ Sung:</h3>
    <ul>
        <li>Chúng tôi không chấp nhận đổi trả hoặc hoàn tiền đối với các sản phẩm đã sử dụng hoặc bị hư hỏng do lỗi của khách hàng.</li>
        <li>Quyết định cuối cùng về việc đổi trả và hoàn tiền sẽ thuộc về chúng tôi, dựa trên điều kiện cụ thể của từng trường hợp.</li>
    </ul>
    
    <p>Chúng tôi luôn mong muốn mang đến cho bạn trải nghiệm mua sắm tốt nhất và sẵn sàng hỗ trợ nếu có bất kỳ vấn đề gì xảy ra. Nếu bạn có bất kỳ câu hỏi nào về Chính sách Đổi trả của chúng tôi, xin vui lòng liên hệ với chúng tôi để được giải đáp thêm.</p>
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
