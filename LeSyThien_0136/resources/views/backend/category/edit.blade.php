@extends('layout.admin')
@section('content')
<div class="content">

                  <section class="content-header my-2">
                     <h1 class="d-inline">Danh mục</h1>
                     <hr style="border: none;" />
                  </section>
                  <section class="content-body my-2">

                     <div class="row">
                     <form action="{{ route('admin.category.update', ['id' => $category->id]) }}"
                     method="post"enctype="multipart/form-data"> 
              @csrf
              @method ("put") 
              <div class="mb-3">
                <label for="name">Tên Danh Mục</label>
                <input type="text" value="{{old('name',$category->name)}}" name="name" id="id" class="form-control">
               
              </div>
              <div class="mb-3">
                <label for="description">Mô tả</label>
                <textarea name="description" id="description" rows="3" class="form-control">{{old("description",$category->description)}}</textarea>
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
                  <option value="2"{{($category->status==2)?'selected':''}}>--Chưa xuất bản--</option>
                  <option value="1"{{($category->status==1)?'selected':''}}>--Xuất bản--</option>
                </select>
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-success">Thêm Danh Mục</button>
              </div>
            </form>
                      
                     </div>

                  </section>
               </div>
              
@endsection 