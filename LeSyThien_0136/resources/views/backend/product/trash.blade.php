@extends('layout.admin')
@section('content')
<div class="content">
   <section class="content-header my-2">
      <h1 class="d-inline">Sản phẩm</h1>
      <a class="btn-add" href="{{route('admin.product.index')}}">trở về</a>


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
                  <img src="{{asset("images/product/".$row->image)}}" class="img-fluid" alt="{{$row->image}}">
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
                     <a href="{{route("admin.product.restore",$agrs)}}" class="text-primary mx-1">
                        <i class="fa fa-undo"></i>
                     </a>
                     <a href="{{route("admin.product.delete",$agrs)}}" class="text-danger mx-1">
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