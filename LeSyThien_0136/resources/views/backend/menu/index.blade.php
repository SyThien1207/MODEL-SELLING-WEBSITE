@extends('layout.admin')
@section('content')
<div class="content">
                  <section class="content-header my-2">
                     <h1 class="d-inline">Quản lý menu</h1>
                     <a class="btn-add" href="{{route('admin.menu.trash')}}">Thùng rác</a>

                     <div class="row mt-3 align-items-center">
                        <div class="col-6">
                           <ul class="manager">
                              <li><a href="menu_index.html">Tất cả (123)</a></li>
                              <li><a href="#">Xuất bản (12)</a></li>
                              <li><a href="menu_trash.html">Rác (12)</a></li>
                           </ul>
                        </div>
                        <div class="col-6 text-end">
                           <input type="text" class="search d-inline" />
                           <button class="d-inline btnsearch">Tìm kiếm</button>
                        </div>
                     </div>
                  </section>
                  <section class="content-body my-2">
                     <div class="row"> 
                        <div class="col-md-3">
                        <form action="{{ route('admin.menu.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                           <ul class="list-group">
                              <li class="list-group-item mb-2">
                                 <select name="position" class="form-control">
                                 <option value="mainmenu">main menu</option>
                                 <option value="footermenu">footer menu</option>
                                 </select>
                              </li>
                              <li class="list-group-item mb-2 border">
                                 <a class="d-block" href="#multiCollapseCategory" data-bs-toggle="collapse">
                                    Danh mục sản phẩm
                                 </a>
                                 <div class="collapse multi-collapse border-top mt-2" id="multiCollapseCategory">
                                    @foreach ($list_category as $category )
                                    
                                    
                                    <div class="form-check">
                                       <input name="categoryid[]" class="form-check-input" type="checkbox" value="{{ $category->id}}"
                                          id="category{{$category->id}}" />
                                       <label class="form-check-label" for="categoryid{{$category->id}}">
                                         {{$category->name}}
                                       </label>
                                    </div>@endforeach
                                    <div class="my-3"><div class="box-body p-2 border-bottom">
                                 <p>Chọn trạng thái đăng</p>
                                 <select name="status" class="form-select">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                 </select>
                              </div>
                                       <button name="createCategory" type="submit"
                                          class="btn btn-sm btn-success form-control">Thêm</button>
                                    </div>
                                 </div>
                              </li>
                              <li class="list-group-item mb-2 border">
                                 <a class="d-block" href="#multiCollapseBrand" data-bs-toggle="collapse">
                                    Thương hiệu
                                 </a>
                                 <div class="collapse multi-collapse border-top mt-2" id="multiCollapseBrand">
                                 @foreach ($list_brand as $brand )
                                    
                                    
                                    <div class="form-check">
                                       <input name="brandid[]" class="form-check-input" type="checkbox" value="{{ $brand->id}}"
                                          id="brand{{$brand->id}}" />
                                       <label class="form-check-label" for="brandid{{$brand->id}}">
                                         {{$brand->name}}
                                       </label>
                                    </div>@endforeach
                                    <div class="my-3"><div class="box-body p-2 border-bottom">
                                 <p>Chọn trạng thái đăng</p>
                                 <select name="status" class="form-select">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                 </select>
                              </div>
                                       <button name="createBrand" type="submit"
                                          class="btn btn-sm btn-success form-control">Thêm</button>
                                    </div>
                                 </div>
                              </li>
                              <li class="list-group-item mb-2 border">
                                 <a class="d-block" href="#multiCollapseTopic" data-bs-toggle="collapse">
                                    Chủ đề bài viết
                                 </a>
                                 <div class="collapse multi-collapse border-top mt-2" id="multiCollapseTopic">
                                 @foreach ($list_topic as $topic )
                                    
                                    
                                    <div class="form-check">
                                       <input name="topicid[]" class="form-check-input" type="checkbox" value="{{ $topic->id}}"
                                          id="topic{{$topic->id}}" />
                                       <label class="form-check-label" for="topicid{{$topic->id}}">
                                         {{$topic->name}}
                                       </label>
                                    </div>@endforeach
                                    <div class="my-3"><div class="box-body p-2 border-bottom">
                                 <p>Chọn trạng thái đăng</p>
                                 <select name="status" class="form-select">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                 </select>
                              </div>
                                       <button name="createTopic" type="submit"
                                          class="btn btn-sm btn-success form-control">Thêm</button>
                                    </div>
                                 </div>
                              </li>
                              <li class="list-group-item mb-2 border">
                                 <a class="d-block" href="#multiCollapsepost" data-bs-toggle="collapse">
                                    Trang đơn
                                 </a>
                                 <div class="collapse multi-collapse border-top mt-2" id="multiCollapsepost">
                                 @foreach ($list_post as $post )
                                    
                                    
                                    <div class="form-check">
                                       <input name="postid[]" class="form-check-input" type="checkbox" value="{{ $post->id}}"
                                          id="post{{$post->id}}" />
                                       <label class="form-check-label" for="postid{{$post->id}}">
                                         {{$post->title}}
                                       </label>
                                    </div>@endforeach
                                    <div class="my-3"><div class="box-body p-2 border-bottom">
                                 <p>Chọn trạng thái đăng</p>
                                 <select name="status" class="form-select">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                 </select>
                              </div>
                                       <button name="createPost" type="submit"
                                          class="btn btn-sm btn-success form-control">Thêm</button>
                                    </div>
                                 </div>
                              </li>
                              <li class="list-group-item mb-2 border">
            <a class="d-block" href="#multiCollapseCustom" data-bs-toggle="collapse">
                Tùy biến liên kết
            </a>
            <div class="collapse multi-collapse border-top mt-2" id="multiCollapseCustom">
                <div class="mb-3">
                    <label>Tên menu</label>
                    <input type="text" value="{{ old('name') }}" id="name" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Liên kết</label>
                    <input type="text" value="{{ old('link') }}" id="link" name="link" class="form-control" />
                </div>
                <div class="box-body p-2 border-bottom">
                    <p>Chọn trạng thái đăng</p>
                    <select name="status" class="form-select">
                        <option value="1">Xuất bản</option>
                        <option value="2">Chưa xuất bản</option>
                    </select>
                    <button name="createCustom" type="submit" class="btn btn-sm btn-success form-control">Thêm</button>
                </div>
            </div>
        </li>
    </ul>
</form>
                        </div>
                        <div class="col-md-9">
                           <div class="row mt-1 align-items-center">
                              <div class="col-md-8">
                                 <select name="" class="d-inline me-1">
                                    <option value="">Hành động</option>
                                    <option value="">Bỏ vào thùng rác</option>
                                 </select>
                                 <button class="btnapply">Áp dụng</button>
                              </div>
                              <div class="col-md-4 text-end">
                                 <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-sm justify-content-end">
                                       <li class="page-item disabled">
                                          <a class="page-link">&laquo;</a>
                                       </li>
                                       <li class="page-item"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">&raquo;</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th class="text-center" style="width:30px;">
                                       <input type="checkbox" id="checkboxAll" />
                                    </th>
                                    <th>Tên menu</th>
                                    <th>Liên kết</th>
                                    <th>Vị trí</th>
                                    <th class="text-center" style="width:30px;">ID</th>
                                 </tr>
                              </thead>
                              <tbody>
                        @foreach($list as $row)
                                 <tr class="datarow">
                                    <td class="text-center">
                                       <input type="checkbox" id="checkId" />
                                    </td>
                                    <td>
                                       <div class="name">
                                       {{$row->name}}
                                       </div>
                                       @php
                                    $agrs =['id'=>$row->id];
                                    @endphp                                                                                           
                                      @if ($row->status==1)
                                    <a href="{{route("admin.menu.status",$agrs)}}" class="px-1 text-success">
                                             <i class="fa fa-toggle-on"></i>
                                          </a>
                                          @else
                                          <a href="{{route("admin.menu.status",$agrs)}}" class="px-1 text-success">
                                             <i class="fa fa-toggle-off"></i>
                                          </a>
                                    @endif                                                                                       
                                         
                                          <a  href="{{route('admin.menu.edit' ,$agrs)}}" class="px-1 text-primary">
                                             <i class="fa fa-edit"></i>
                                          </a>
                                    <a href="menu_show.html" class="text-info mx-1">
                                       <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{route("admin.menu.destroy",$agrs)}}" class="text-danger mx-1">
                                       <i class="fa fa-trash"></i>
                                    </a>
                                       </div>
                                    </td>
                                    <td>                                    {{$row->link}}
</td>
                                      <td>                                 {{$row->position}}
</td>
                                    <td class="text-center">
                                    {{$row->id}}

                                    </td>
                                 </tr>
                           @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>

                  </section>
               </div>
@endsection 