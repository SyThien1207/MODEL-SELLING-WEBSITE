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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>
<body>
  <x-header />
  <main>
    <div class="product-featured">

      <div class="showcase-container">

        <h2 class="title">Liên hệ</h2>
        <div class="showcase">

          <div class="showcase-banner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.746776096385!2d106.77242407468411!3d10.830680489321376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317526ffdc466379%3A0x89b09531e82960d!2zMjAgVMSDbmcgTmjGoW4gUGjDuiwgUGjGsOG7m2MgTG9uZyBCLCBRdeG6rW4gOSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oIDcwMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1692683712719!5m2!1svi!2s" style="width: 100%; height: 400px;"></iframe>
          </div>

          <div class="showcase-content">

            <style>
              .contact-form {
                max-width: 400px;
                margin: 0 auto;
              }

              .form-group {
                margin-bottom: 20px;
              }

              .form-group label {
                display: block;
                margin-bottom: 5px;
              }

              .form-group input[type="text"],
              .form-group input[type="email"],
              .form-group input[type="tel"],
              .form-group textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
              }

              .form-group textarea {
                height: 150px;
              }

              .form-group .submit-button {
                text-align: center;
              }

              .form-group .submit-button button[type="submit"] {
                background-color: #4CAF50;
                /* Màu xanh */
                color: #4CAF50;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
              }

              .form-group .submit-button button[type="submit"]:hover {
                background-color: #999;
              }
            </style>

<form action="{{ route('contact.post') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Họ và tên:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
  </div>
  <div class="form-group">
    <label for="phone">Số điện thoại:</label>
    <input type="number" id="phone" name="phone" value="{{ old('phone') }}" required>
  </div>
  <div class="form-group">
    <label for="title">Tiêu đề:</label>
    <input type="text" id="title" name="title" value="{{ old('title') }}" required>
  </div>
  <div class="form-group">
    <label for="content">Nội dung:</label>
    <textarea id="content" name="content" required>{{ old('content') }}</textarea>
  </div>
  <div class="form-group submit-button">
    <button class="add-cart-btn">Submit</button>
  </div>
</form>

          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <x-footer />
  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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

</body>

</html>