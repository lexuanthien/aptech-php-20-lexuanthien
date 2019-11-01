@extends('master')
@section('phannoidung')
          <!--PHẦN NỘI DUNG-->
              <h1>Edit User - Chỉnh Sửa Thông Tin Người Dùng</h1>
              <hr>
              <form action="{{ route('users.update', $user->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label>Username:</label>
                  <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                  <label>Email:</label>
                  <input type="text" class="form-control" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="text" class="form-control" name="password" value="{{$user->password}}">
                </div>
                <div class="form-group">
                    <label for=""> Vai Trò: </label>
                    <select name="tenvaitro">
                        @foreach($role as $roles)
                          <option value="{{$roles->id}}">
                            {{$roles->name}} 
                          </option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-warning font-weight-bold">LƯU</button>
                </div>
              </form>
  <!--HẾT PHẦN NỘI DUNG-->
@stop