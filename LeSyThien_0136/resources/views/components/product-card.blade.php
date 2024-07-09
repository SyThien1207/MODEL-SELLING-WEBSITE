<div class="showcase">

<div class="showcase-banner">
  <img  src="{{asset("images/product/".$product->image)}}"alt="{{$product->image}}"width="50" class="product-img default">
  <img  src="{{asset("images/product/".$product->image)}}"alt="{{$product->image1}}"width="50" class="product-img hover">


  <div class="showcase-actions">

  <button class="btn-action" onclick="handleAddLike({{ $product->id }})">
                <ion-icon name="heart-outline"></ion-icon>
    
              </button>
              <a href="/chi-tiet-san-pham/{{$product->id}}">
    <button class="btn-action" >
      <ion-icon name="eye-outline"></ion-icon>
    </button>
    </a>

    
  </div>

</div>

<div class="showcase-content">

 

  <a href="/chi-tiet-san-pham/{{$product->id}}">
    <h3 class="showcase-title">{{$product->name}}</h3>
  </a>

  <div class="showcase-rating">
    <ion-icon name="star"></ion-icon>
    <ion-icon name="star"></ion-icon>
    <ion-icon name="star"></ion-icon>
    <ion-icon name="star-outline"></ion-icon>
    <ion-icon name="star-outline"></ion-icon>
  </div>

  <div class="price-box">
  @if($product->pricesale)
        <p class="price"> {{ number_format($product->pricesale) }} vnd</p>
        <del>{{ number_format($product->price )}} vnd</del>
      @else
        <p class="price"> {{number_format( $product->price )}} vnd</p>
      @endif
  </div>

</div>

</div>

<script>
    function handleAddLike(productid) {
        $.ajax({
            url: "{{ route('like.addlike') }}",
            type: "GET",
            data: {
                productid: productid
            },
            success: function(response) {
                // Xử lý phản hồi thành công mà không cần thông báo
                console.success('Đã thêm vào yêu thích thành công');
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi mà không cần thông báo
                console.error('Có lỗi xảy ra khi thêm vào yêu thích');
            }
        });
    }
</script>

