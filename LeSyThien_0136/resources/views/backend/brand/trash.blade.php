@extends('layout.admin')
@section('content')
<div class="content">
                  <section class="content-header my-2">
                     <h1 class="d-inline">Thương hiệu</h1>
                     <a class="btn-add" href="{{route('admin.brand.index')}}">trở về</a>
                     <hr style="border: none;">
                  </section>
                  <section class="content-body my-2">

                     <div class="row">
                    
                        <div class="col-md-8">
                          
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
                                         <a href="{{route("admin.brand.restore",$agrs)}}" class="text-primary mx-1">
                                       <i class="fa fa-undo"></i>
                                    </a>
                                    <a href="{{route("admin.brand.delete",$agrs)}}" class="text-danger mx-1">
                                       <i class="fa fa-trash"></i>
                                    </a>
                                 </div>
                                    </td>
                                    <td> {{$row->slug}}</td>
                                    <td class="text-center"> {{$row->id}}</td>
                                 </tr>
                           @endforeach

                          
                        </div>
                    

                  </section> </div>
            
@endsection 