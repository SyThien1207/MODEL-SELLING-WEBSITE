@extends('layout.admin')
@section('content')
<div class="content">
                  <section class="content-header my-2">
                     <h1 class="d-inline">Danh mục</h1>
                     <a class="btn-add" href="{{route('admin.category.trash')}}">Thùng rách</a>

                     <hr style="border: none;" />
                  </section>
                  <section class="content-body my-2">

                     <div class="row">
                        <div class="col-md-4">
                        <form action="{{route('admin.category.store')}}" 
                        method="post"enctype="multipart/form-data"> 
              @csrf
              <div class="mb-3">
                <label for="name">Tên Danh Mục</label>
                <input type="text" value="{{old('name')}}" name="name" id="id" class="form-control">
               
              </div>
              <div class="mb-3">
                <label for="description">Mô tả</label>
                <textarea name="description" id="description" rows="3" class="form-control">{{old("description")}}</textarea>
              </div>
              <div class="mb-3">
               <label class="parent_id">Cấp cha</label>
               <select class="form-control" name="parent_id" id="parent_id">
               <option value="0">--Cấp cha--</option> 
               {!! $htmlparentid !!}
              </select> 
              </div>
              <div class="mb-3">
                <label for="sort_order">Sắp xếp</label>
                <select name="sort_order" id="sort_order" class="form-control">
                  <option value="0">--Sắp xếp--</option>
                  {!! $htmlsortorder !!}
                </select>               
              </div>
              <div class="mb-3">
                <label for="image">Hình Ảnh</label>
                <input type="file" name="image" id="image" class="form-control">
              </div>
              <div class="mb-3">
                <label for="status">Trạng Thái</label>
                <select name="status" id="status" class="form-control">  
                    <option value="1">--Xuất bản--</option>
                  <option value="2">--Chưa xuất bản--</option>
              
                </select>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-success">Thêm Danh Mục</button>
              </div>
            </form>
                        </div>
                        <div class="col-md-8">
                      
                           <div class="row my-2 align-items-center">
                           {{$list->links()}}
                           </div>
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th class="text-center" style="width:30px;">
                                       <input type="checkbox" id="checkboxAll" />
                                    </th>
                                    <th class="text-center" style="width:90px;">Hình ảnh</th>
                                    <th>Tên danh mục</th>
                                    <th>Tên slug</th>
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
                                       <img 
                                       src="{{asset("images/category/".$row->image)}}"classd="img-fluid"
                                        alt="{{$row->image}}" width="60px">
                                    </td>
                                    <td>
                                       <div class="name">
                                          <a href="category_index.html">
                                          {{$row->name}}
                                          </a>
                                       </div>
                                       <div class="function_style">
                                       @php
                                    $agrs =['id'=>$row->id];
                                    @endphp     
                                    @if ($row->status==1)

                                        <a href="{{route("admin.category.status",$agrs)}}" class="px-1 text-success">
                                             <i class="fa fa-toggle-on"></i>
                                          </a>
                                          @else
                                          <a href="{{route("admin.category.status",$agrs)}}" class="px-1 text-success">
                                             <i class="fa fa-toggle-off"></i>
                                          </a>
                                    @endif                                                                                       
                                         
                                          <a  href="{{route('admin.category.edit' ,$agrs)}}" class="px-1 text-primary">
                                             <i class="fa fa-edit"></i>
                                          </a>
                                    <a href="category_show.html" class="text-info mx-1">
                                       <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{route("admin.category.destroy",$agrs)}}" class="text-danger mx-1">
                                       <i class="fa fa-trash"></i>
                                    </a>
                                       </div>
                                    </td>
                                    <td>   {{$row->slug}}</td>
                                    <td class="text-center">   {{$row->id}}</td>
                                 </tr>
                                 @endforeach

                              </tbody>
                           </table>
                        </div>
                     </div>

                  </section>
               </div>
@endsection 