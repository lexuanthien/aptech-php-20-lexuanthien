@extends('master')
@section('phannoidung')
          <!--PHẦN NỘI DUNG-->

          
              <h1>Edit Role - Chỉnh Sửa Thông Tin Role</h1>
              <hr>
              <form action="{{ route('roles.update', $role->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label>Role Name:</label>
                  <input type="text" class="form-control" name="name_role" value="{{$role->name}}">
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-warning font-weight-bold">LƯU</button>
                </div>
              </form>
          

          <!--HẾT PHẦN NỘI DUNG-->
@stop