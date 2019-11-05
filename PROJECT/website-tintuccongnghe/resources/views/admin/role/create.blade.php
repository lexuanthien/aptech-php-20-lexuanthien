@extends('master')
@section('phannoidung')
            <!--PHẦN NỘI DUNG-->

              <h1>Create Role - Tạo Một Chức Năng Mới</h1>
              <hr>
              <form action="{{ route('roles.store') }}" method="POST">
                  <input type="hidden" name="_token" value={{csrf_token()}}>
      
                  <div class="form-group">
                    <label for="">Role Name:</label>
                    <input type="text" class="form-control" name="role_name" placeholder="Role Name">
                  </div>
                  <div class="mt-2">
                    <button type="submit" class="btn btn-success font-weight-bold">THÊM</button>
                  </div>
              </form>    
          </div>

          <!--HẾT PHẦN NỘI DUNG-->
@stop