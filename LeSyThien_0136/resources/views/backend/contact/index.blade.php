@extends('layout.admin')
@section('content')
<div class="content">
                  <section class="content-header my-2">
                     <h1 class="d-inline">Liên hệ</h1>
                     <div class="row mt-3 align-items-center">
                        <div class="col-6">
                           <ul class="manager">
                              <li><a href="contact_index.html">Tất cả (123)</a></li>
                              <li><a href="#">Xuất bản (12)</a></li>
                              <li><a href="contact_trash.html">Rác (12)</a></li>
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
                  </section>
                  <section class="content-body my-2">

                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th class="text-center" style="width:30px;">
                                 <input type="checkbox" id="checkboxAll" />
                              </th>
                              <th>Họ tên</th>
                              <th>Điện thoại</th>
                              <th>Email</th>
                              <th>Tiêu đề</th>
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
                                    <a href="contact_reply.html">                                 
                                          {{$row->name}}
</a>
                                 </div>
                                 <div class="function_style">
                                    <a href="#" class="text-success mx-1">
                                       <i class="fa fa-toggle-on"></i>
                                    </a>
                                    <a href="contact_replay.html" class="text-primary mx-1">
                                       <i class="fa fa-edit"></i> Trả lời
                                    </a>
                                    <a href="contact_show.html" class="text-info mx-1">
                                       <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="text-danger mx-1">
                                       <i class="fa fa-trash"></i>
                                    </a>
                                 </div>
                              </td>
                              <td>                                    {{$row->phone}}
</td>
                              <td>                                    {{$row->email}}
</td>
                              <td>                                    {{$row->title}}
</td>
                                   
                              <td class="text-center"> {{$row->id}}</td>
                           </tr>
                           @endforeach

                        </tbody>
                     </table>

                  </section>
               </div>
@endsection 