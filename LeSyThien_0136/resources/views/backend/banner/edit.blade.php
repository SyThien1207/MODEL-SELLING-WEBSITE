@extends('layout.admin')
@section('content')
<div class="content">
                  <section class="content-header my-2">
                     <h1 class="d-inline">Thêm banner</h1>
                     <div class="text-end">
                        <a href="{{route('admin.banner.index')}}"  class="btn btn-sm btn-success">
                           <i  class="fa fa-arrow-left" ></i> Về danh sách
                        </a>
                     </div>
                  </section>
                  <section class="content-body my-2"> 
                  <form action="{{ route('admin.banner.update', ['id' => $banner->id]) }}"
                     method="post"enctype="multipart/form-data"> 
              @csrf
              @method ("put") 
                     <div class="row">
                        <div class="col-md-9">
                      
                           <div class="mb-3">
                              <label><strong>Tên banner (*)</strong></label>
                              <input type="text" value="{{old('name',$banner->name)}}"  name="name" class="form-control" placeholder="Nhập tên banner" />
                           </div>
                           <div class="mb-3">
                              <label><strong>Liên kết</strong></label>
                              <input type="text"  value="{{old('link',$banner->link)}}" name="link" class="form-control" placeholder="Nhập liên kết" />
                           </div>
                           <div class="mb-3">
                              <label><strong>Mô tả (*)</strong></label>
                              <textarea name="description" rows="5" class="form-control"
                                 placeholder="Nhập mô tả">{{old("description",$banner->description)}}</textarea>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="box-container mt-4 bg-white">
                              <div class="box-header py-1 px-2 border-bottom">
                                 <strong>Đăng</strong>
                              </div>
                              <div class="box-body p-2 border-bottom">
                                 <p>Chọn trạng thái đăng</p>
                                 <select name="status" id="status" class="form-select">
                                 <option value="2"{{($banner->status==2)?'selected':''}}>--Chưa xuất bản--</option>
                  <option value="1"{{($banner->status==1)?'selected':''}}>--Xuất bản--</option>
                                 </select>
                              </div>
                              <div class="box-footer text-end px-2 py-3">
                                 <button type="submit" class="btn btn-success btn-sm text-end">
                                    <i class="fa fa-save" aria-hidden="true"></i> Đăng
                                 </button>
                              </div>
                           </div>
                           <div class="box-container mt-4 bg-white">
                              <div class="box-header py-1 px-2 border-bottom">
                                 <strong>Vị trí (*)</strong>
                              </div>
                              <div class="box-body p-2 border-bottom">
                                 <select name="position" class="form-select">
                                    <option>Chọn vị trí</option>
                                    {!! $htmlposition !!}
                                 </select>
                                 <p class="pt-2">Vị trí hiển thị banner</p>
                              </div>
                           </div>
                           <div class="box-container mt-4 bg-white">
                           <div class="mb-3">
                <label for="image">Hình Ảnh</label>
                <input type="file" name="image" id="image" class="form-control">
              </div>
                           </div>
                        </div>
                     </div>     </form>
                  </section>
               </div>
@endsection 