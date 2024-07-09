


<div class="banner">

<div class="container">

  <div class="slider-container has-scrollbar">
  @foreach ( $list_banner as $row )
  @if ($loop->first)
    <div class="slider-item">

    <img src="{{asset("images/banner/".$row->image)}}" alt="{{$row->image}}" class="banner-img">
    
      <div class="banner-content">

        

      </div>

    </div>
    @else
    <div class="slider-item">

<img src="{{asset("images/banner/".$row->image)}}" alt="{{$row->image}}" class="banner-img">



</div>
@endif
     
     @endforeach
 

  </div>

</div>

</div>

