


<div class="container">


<h2 class="title">  
</h2>
<h2 class="title">        
    <a class="custom-btn btn-12" href="{{route('post.post')}}" >
        <span>xem thêm</span>
        <span>Bài viết</span>
        </a>    

</h2>

   
<div class="blog">

<div class="container">

  <div class="blog-container has-scrollbar">
  @foreach ($post_new as $post_item)

    <div class="blog-card">

      <a href="#">
        <img  src="{{asset("images/post/".$post_item->image)}}"alt="{{$post_item->image}}"width="140"  class="blog-banner">
  
    </a>

      <div class="blog-content">

        <a  class="blog-category">{{$post_item->topic_name}}</a>

        <a href="/chi-tiet-bai-viet/{{$post_item->id}}">
          <h3 class="blog-title">{{$post_item->title}}</h3>
        </a>

        <p class="blog-meta">
          By <cite>{{$post_item->user_name}}</cite> / <time datetime="2022-04-06">{{$post_item->created_at}}</time>
        </p>

      </div>

    </div>
    @endforeach


  </div>

</div>

</div>


</div>

</div>
