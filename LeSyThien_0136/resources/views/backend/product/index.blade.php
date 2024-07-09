@extends('layout.admin')
@section('content')
<div class="content">
   <section class="content-header my-2">
      <h1 class="d-inline">Sản phẩm</h1>
      <a href="{{route('admin.product.create')}}" class="btn-add">Thêm mới</a>
      <a class="btn-add" href="{{route('admin.product.trash')}}">Thùng rác</a>

      <div class="row mt-3 align-items-center">
         <div class="col-6">
            <ul class="manager">
               <li><a href="product_index.html">Tất cả (123)</a></li>
               <li><a href="#">Xuất bản (12)</a></li>
               <li><a href="product_trash.html">Rác (12)</a></li>
            </ul>
         </div>
         <div class="col-6 text-end">
            <input type="text" class="search d-inline" />
            <button class="d-inline btnsearch">Tìm kiếm</button>
         </div>
      </div>
      <div class="row mt-1 align-items-center">
         <div class="col-md-8">
            <select name="" class="d-inline me-1">
               <option value="">Hành động</option>
               <option value="">Bỏ vào thùng rác</option>
            </select>
            <button class="btnapply">Áp dụng</button>
            <select name="" class="d-inline me-1">
               <option value="">Tất cả danh mục</option>
            </select>
            <select name="" class="d-inline me-1">
               <option value="">Tất cả thương hiệu</option>
            </select>
            <button class="btnfilter">Lọc</button>
         </div>
         <div class="col-md-4 text-end">
            <nav aria-label="Page navigation example">
               <ul class="pagination pagination-sm justify-content-end">
               {{$list->links()}}

               </ul>
            </nav>
         </div>
      </div>
   </section>
   <section class="content-body my-2">

      <table class="table table-bordered">
         <thead>
            <tr>
               <th class="text-center" style="width:30px;">
                  <input type="checkbox" id="checkboxAll" />
               </th>
               <th class="text-center" style="width:130px;">Hình ảnh</th>
               <th>Tên sản phẩm</th>
               <th>Tên danh mục</th>
               <th>Tên thương hiệu</th>
               <th>ID</th>
            </tr>
         </thead>
         <tbody>
            @foreach($list as $row)

            <tr class="datarow">
               <td>
                  <input type="checkbox" id="checkId" />
               </td>
               <td>
                  <img src="{{asset("images/product/".$row->image)}}" class="img-fluid" alt="{{$row->image}}"width="70">
               </td>
              
               <td>
                  <div class="name">
                     <a href="product_edit.html">
                        {{$row->name}}
                     </a>
                  </div>
                  <div class="function_style">

                     @php
                     $agrs =['id'=>$row->id];
                     @endphp
               
                     <a href="{{route('admin.product.edit' ,$agrs)}}" class="px-1 text-primary">
                        <i class="fa fa-edit"></i>
                     </a>
                     <a href="product_show.html" class="text-info mx-1">
                        <i class="fa fa-eye"></i>
                     </a>
                     <a href="{{route("admin.product.destroy",$agrs)}}" class="text-danger mx-1">
                        <i class="fa fa-trash"></i>
                     </a>
                  </div>
               </td>
               <td> {{$row->brandname}}</td>
               <td>{{$row->categoryname}}</td>
               <td class="text-center" style="width:30px;"> {{$row->id}}</td>
            </tr>
            @endforeach

         </tbody>
      </table>

   </section>
</div>
@endsection