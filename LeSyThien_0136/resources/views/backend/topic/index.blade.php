@extends('layout.admin')
@section('content')
<div class="content">
   <section class="content-header my-2">
      <h1 class="d-inline">Chủ đề bài viết</h1>
      <a class="btn-add" href="{{route('admin.topic.trash')}}">Thùng rác</a>

      <hr style="border: none;" />
   </section>
   <section class="content-body my-2">

      <div class="row">

         <div class="col-md-4">
            <form action="{{route('admin.topic.store')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div class="mb-3">
                  <label><strong>Tên chủ đề (*)</strong></label>
                  <input type="text" value="{{old('name')}}" name="name" class="form-control" placeholder="Tên chủ để">
               </div>
               <div class="mb-3">
                  <label><strong><strong>Mô tả</strong></strong></label>
                  <textarea name="description" rows="6" class="form-control" placeholder="Mô tả">
                  {{old('description')}}
                  </textarea>
               </div>
               <div class="mb-3">
                  <label for="sort_order">Sắp xếp</label>
                  <select name="sort_order" id="sort_order" class="form-control">
                     <option value="0">--Sắp xếp--</option>
                     {!! $htmlsortorder !!}
                  </select>
               </div>
               <div class="mb-3">
                  <label><strong>Trạng thái</strong></label>
                  <select name="status" class="form-control">
                     <option value="1">Xuất bản</option>
                     <option value="2">Chưa xuất bản</option>
                  </select>
               </div>
               <div class="mb-3 text-end">
                  <button class="btn btn-sm btn-success" type="submit" name="THEM">
                     <i class="fa fa-save"></i> Lưu[Cập nhật]
                  </button>
               </div>
            </form>
         </div>

         <div class="col-md-8">
            <div class="row mt-3 align-items-center">
               <div class="col-12">
                  <ul class="manager">
                     <li><a href="brand_index.html">Tất cả (123)</a></li>
                     <li><a href="#">Xuất bản (12)</a></li>
                     <li><a href="brand_trash.html">Rác (12)</a></li>
                  </ul>
               </div>
            </div>
            <div class="row my-2 align-items-center">
               <div class="col-md-6">
                  <select name="" class="d-inline me-1">
                     <option value="">Hành động</option>
                     <option value="">Bỏ vào thùng rác</option>
                  </select>
                  <button class="btnapply">Áp dụng</button>
               </div>
               <div class="col-md-6 text-end">
                  <input type="text" class="search d-inline" />
                  <button class="d-inline">Tìm kiếm</button>
               </div>
            </div>
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th class="text-center" style="width:30px;">
                        <input type="checkbox" id="checkboxAll" />
                     </th>
                     <th>Tên chủ đề</th>
                     <th>Tên slug</th>
                     <th class="text-center" style="width:30px;">ID</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($list as $row)

                  <tr class="datarow">
                     <td>
                        <input type="checkbox" id="checkId" />
                     </td>
                     <td>
                        <div class="name">
                           <a href="topic_edit.html">
                              {{$row->name}}
                           </a>
                        </div>
                        <div class="function_style">
                           @php
                           $agrs =['id'=>$row->id];
                           @endphp
                            @if ($row->status==1)
                     <a href="{{route("admin.topic.status",$agrs)}}" class="px-1 text-success">
                        <i class="fa fa-toggle-on"></i>
                     </a>
                     @else
                     <a href="{{route("admin.topic.status",$agrs)}}" class="px-1 text-success">
                        <i class="fa fa-toggle-off"></i>
                     </a>
                     @endif

                     <a href="{{route('admin.topic.edit' ,$agrs)}}" class="px-1 text-primary">
                        <i class="fa fa-edit"></i>
                     </a>
                     <a href="topic_show.html" class="text-info mx-1">
                        <i class="fa fa-eye"></i>
                     </a>
                     <a href="{{route("admin.topic.destroy",$agrs)}}" class="text-danger mx-1">
                        <i class="fa fa-trash"></i>
                     </a>
                        </div>
                     </td>
                     <td>{{$row->slug}}</td>
                     <td class="text-center">{{$row->id}}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>

   </section>
</div>
@endsection