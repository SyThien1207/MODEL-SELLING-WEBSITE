@extends('layout.admin')
@section('content')
<div class="content">
                  <section class="content-header my-2">
                     <h1 class="d-inline">Thương hiệu</h1>
                     <a class="btn-add" href="{{route('admin.brand.trash')}}">Thùng rác</a>

                     <hr style="border: none;">
                  </section>
                  <section class="content-body my-2">

                     <div class="row">
                        <div class="col-md-4">
                        <form action="{{route('admin.brand.store')}}" 
                        method="post"enctype="multipart/form-data"> 
              @csrf
                           <div class="mb-3">
                              <label>
                                 <strong>Tên thương hiệu (*)</strong>
                              </label>
                              <input type="text"value="{{old('name')}}" name="name" id="name" placeholder="Nhập tên danh mục"
                                 class="form-control" required>
                           </div>
                           <div class="mb-3">
                              <label><strong>Mô tả</strong></label>
                              <textarea name="description" rows="4" class="form-control" placeholder="Mô tả">{{old("description")}}</textarea>
                           </div>
                           <div class="mb-3">
                <label for="sort_order">Sắp xếp</label>
                <select name="sort_order" id="sort_order" class="form-control">
                  <option value="0">--Sắp xếp--</option>
                  {!! $htmlsortorder !!}
                </select>               
              </div> 
                           <div class="mb-3">
                              <label><strong>Hình đại diện</strong></label>
                              <input type="file" name="image" class="form-control">
                           </div>
                           <div class="mb-3">
                              <label><strong>Trạng thái</strong></label>
                              <select name="status" class="form-control">
                                 <option value="1">Xuất bản</option>
                                 <option value="2">Chưa xuất bản</option>
                              </select>
                           </div>
                           <div class="mb-3 text-end">
                              <button type="submit" class="btn btn-success" name="THEM">
                                 <i class="fa fa-save"></i> Lưu[Thêm]
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
                                 <button class="btnsearch d-inline">Tìm kiếm</button>
                              </div>
                           </div>
                           <table class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th class="text-center" style="width:30px;">
                                       <input type="checkbox" id="checkboxAll" />
                                    </th>
                                    <th class="text-center" style="width:90px;">Hình ảnh</th>
                                    <th>Tên thương hiệu</th>
                                    <th>Tên slug</th>
                                    <th class="text-center" style="width:30px;">ID</th>
                                 </tr>
                              </thead>
                              <tbody>
                              @foreach($list as $row)
                                 <tr class="datarow">
                                    <td class="text-center">
                                       <input type="checkbox" />
                                    </td>
                                    <td>
                                    <img 
                                       src="{{asset("images/brand/".$row->image)}}"class="img-fluid"
                                        alt="{{$row->image}}">                                            </td>
                                    <td>
                                       <div class="name">
                                          <a href="brand_index.html">
                                          {{$row->name}}
                                          </a>
                                       </div>
                                       @php
                                    $agrs =['id'=>$row->id];
                                    @endphp                                                                                           
                                          @if ($row->status==1)
                                    <a href="{{route("admin.brand.status",$agrs)}}" class="px-1 text-success">
                                             <i class="fa fa-toggle-on"></i>
                                          </a>
                                          @else
                                          <a href="{{route("admin.brand.status",$agrs)}}" class="px-1 text-success">
                                             <i class="fa fa-toggle-off"></i>
                                          </a>
                                    @endif                                                                                       
                                         
                                          <a  href="{{route('admin.brand.edit' ,$agrs)}}" class="px-1 text-primary">
                                             <i class="fa fa-edit"></i>
                                          </a>
                                    <a href="brand_show.html" class="text-info mx-1">
                                       <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{route("admin.brand.destroy",$agrs)}}" class="text-danger mx-1">
                                       <i class="fa fa-trash"></i>
                                    </a>
                                 </div>
                                    </td>
                                    <td> {{$row->slug}}</td>
                                    <td class="text-center"> {{$row->id}}</td>
                                 </tr>
                           @endforeach

                              </tbody>
                           </table>
                        </div>
                     </div>

                  </section>
               </div>
@endsection 