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

  <!-- Google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <style>
    .title {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .header-search-container {
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    .search-row,
    .filter-row {
      display: flex;
      width: 100%;
      margin-bottom: 10px;
    }

    .search-field {
      flex: 1;
      padding: 10px;
    }

    .bbtn {
      border: 2px solid black;
      background-color: white;
      color: black;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }

    .bbtn:hover {
      background-color: black;
      color: white;
    }

    .filter-row .form-control {
      margin-right: 10px;
      flex: 1;
    }

    .filter-row .form-control:last-child {
      margin-right: 0;
    }

    .products.grid .product-item {
      display: inline-block;
      width: 23%;
      margin: 1%;
    }

    .products.list .product-item {
      display: block;
      width: 100%;
    }

    .view-mode-row {
      display: flex;
      align-items: center;
    }

    .view-mode-row label {
      margin-right: 10px;
    }

    .bbtn {
      border: 1px solid black;
    }
  </style>
</head>

<body>

  <x-header />

  <!-- MAIN -->
  <main>

    <div class="product-container">
      <div class="container">
        <x-product-category-home />

        <div class="product-box">
          <div class="product-main">
            <span>
              <h2 class="title">
                <div class="title-container">
                  {{$brand->name}}
                  <form action="{{ route('product.product', ['slug' => $brand['slug']]) }}" method="GET" class="form-inline">
                    @csrf
                    <div class="header-search-container">
                      <div class="search-row">
                        <input type="search" name="key" class="form-control search-field" placeholder="Enter your product name..."
                          value="{{ request()->input('key') }}">

                        <select name="sort" class="">
                          <option value="">Sắp xếp</option>
                          <option value="price_asc" @if(request()->input('sort') == 'price_asc') selected @endif>Giá thấp nhất</option>
                          <option value="price_desc" @if(request()->input('sort') == 'price_desc') selected @endif>Giá cao nhất</option>
                          <option value="name_asc" @if(request()->input('sort') == 'name_asc') selected @endif>Ký tự: A-Z</option>
                          <option value="name_desc" @if(request()->input('sort') == 'name_desc') selected @endif>Ký tự: Z-A</option>
                        </select>
                        <div>
                          <button type="submit" class="bbtn">
                            Tìm kiếm
                          </button>
                        </div>
                      </div>
                      <div class="filter-row">
                        <input type="number" name="min_price" class="form-control" placeholder="Min Price"
                          value="{{ request()->input('min_price') }}">
                        <input type="number" name="max_price" class="form-control" placeholder="Max Price"
                          value="{{ request()->input('max_price') }}">
                      </div>
                      <div class="view-mode-row">
                        <label>
                          <input type="radio" name="view_mode" value="grid" {{ request()->input('view_mode', 'grid') == 'grid' ? 'checked' : '' }}>
                          Grid
                        </label>
                        <label>
                          <input type="radio" name="view_mode" value="list" {{ request()->input('view_mode') == 'list' ? 'checked' : '' }}>
                          List
                        </label>
                      </div>
                    </div>
                  </form>
                </div>
              </h2>
            </span>

            <div class="container">
              <div class="product-mains">
                <div class="product-grids">
                  <div class="products {{ request()->input('view_mode', 'grid') }}">
                    <div class="product-grid">
                      @foreach ($product as $product_item)
                        <div class="col-md product-item">
                          <x-product-card :productitem="$product_item" />
                        </div>
                      @endforeach
                    </div>
                    {{$product->links()}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- FOOTER -->
  <x-footer />

  <!-- Custom js link -->
  <script src="./assets/js/script.js"></script>

  <!-- Ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="{{ asset('public/js/script.js') }}"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script>
    function handleAddCart(productid) {
      let qty = document.getElementById("qty").value;
      $.ajax({
        url: "{{ route('cart.addcart') }}",
        type: "GET",
        data: {
          productid: productid,
          qty: qty
        },
        success: function(result, status, xhr) {
          alert(result);
        },
        error: function(xhr, status, error) {
          alert(error);
        }
      });
    }
  </script>
</body>

</html>
