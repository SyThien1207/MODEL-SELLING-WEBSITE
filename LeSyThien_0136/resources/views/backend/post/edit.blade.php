@extends('layout.admin')
@section('content')
<div class="content">
                  <section class="content-header my-2">
                     <h1 class="d-inline">Thêm bài viết</h1>
                     <div class="text-end">
                        <a hhref="{{route('admin.post.index')}}" class="btn btn-sm btn-success">
                           <i class="fa fa-arrow-left"></i> Về danh sách
                        </a>
                     </div>
                  </section>
                  <section class="content-body my-2">
                  <form action="{{ route('admin.post.update', ['id' => $post->id]) }}"
                     method="post"enctype="multipart/form-data"> 
              @csrf
              @method ("put") 
                     <div class="row">
                        <div class="col-md-9">
                           <div class="mb-3">
                              <label><strong>Tiêu đề bài viết (*)</strong></label>
                              <input type="text"value="{{old('title',$post->title)}}" name="title" class="form-control" placeholder="Nhập tiêu đề" />
                           </div>
                           <div class="mb-3">
                              <label><strong>Chi tiết (*)</strong></label>
                              <textarea name="detail" rows="7" class="form-control"
                                 placeholder="Nhập chi tiết">{{old("detail",$post->detail)}}</textarea>
                           </div>
                           <div class="mb-3">
                              <label><strong>Mô tả (*)</strong></label>
                              <textarea name="description" rows="4" class="form-control" placeholder="Mô tả">{{old("description",$post->description)}}</textarea>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="box-container mt-4 bg-white">
                              <div class="box-header py-1 px-2 border-bottom">
                                 <strong>Đăng</strong>
                              </div>
                              <div class="box-body p-2 border-bottom">
                                 <p>Chọn trạng thái đăng</p>
                                 <select name="status" class="form-select">
                                 <option value="2"{{($post->status==2)?'selected':''}}>--Chưa xuất bản--</option>
                                 <option value="1"{{($post->status==1)?'selected':''}}>--Xuất bản--</option>
                                 </select>
                              </div>
                              <div class="box-footer text-end px-2 py-3">
                                 <button type="submit" class="btn btn-success btn-sm text-end">
                                    <i class="fa fa-save" aria-hidden="true"></i> Đăng
                                 </button>
                              </div>
                           </div>
                           <div class="box-container mt-2 bg-white">
                              <div class="box-header py-1 px-2 border-bottom">
                                 <strong>Chủ đề (*)</strong>
                              </div>
                              <div class="box-body p-2 border-bottom">
                                 <select name="topic_id" class="form-select">
                                    <option value="">None</option>
                  {!! $html_topic_id !!}

                                 </select>
                              </div>
                           </div>
                           <div class="box-container mt-2 bg-white">
                              <div class="box-header py-1 px-2 border-bottom">
                                 <strong>Hình đại diện</strong>
                              </div>
                              <div class="box-body p-2 border-bottom">
                                 <input type="file" name="image" class="form-control" />
                              </div>
                           </div>
                        </div>
                     </div>

            </form>
                  </section>
               </div>
@endsection 