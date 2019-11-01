@extends('master')
@section('phannoidung')
          <!--PHẦN NỘI DUNG-->
              <h1>Edit Category - Chỉnh Sửa Thông Tin Thể Loại</h1>
              <hr>
              <form action="{{ route('categories.update', $category->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label>Category:</label>
                  <input type="text" class="form-control" name="name_category" value="{{$category->name}}">
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-warning font-weight-bold">LƯU</button>
                </div>
              </form>
          </div>

          <!--HẾT PHẦN NỘI DUNG-->
@stop