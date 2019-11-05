@extends('master')
@section('phannoidung')
          <!--PHẦN NỘI DUNG-->
              <h1>Edit Comment - Chỉnh Sửa Bình Luận</h1>
              <hr>
              <form action="{{ route('comments.update', $comments->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label>NỘI DUNG BÌNH LUÂN:</label>
                  <input type="text" class="form-control" name="comment" value="{{$comments->content_comment}}">
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-warning font-weight-bold">LƯU</button>
                </div>
              </form>
  <!--HẾT PHẦN NỘI DUNG-->
@stop