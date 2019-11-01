@extends('master')
@section('phannoidung')
            <!--PHẦN NỘI DUNG-->

              <h1>Create User - Tạo Một Người Dùng Mới</h1>
              <hr>
              <form action="{{ route('users.store') }}" method="POST">
                  <input type="hidden" name="_token" value={{csrf_token()}}>
      
                  <div class="form-group">
                    <label for=""> Username:</label>
                    <input type="text" class="form-control" name="name" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for=""> Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for=""> Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for=""> Vai Trò: </label>
                    <select name="role_id">
                        @foreach($roles as $role)
                          <option value="{{$role->id}}">
                            {{$role->name}} 
                          </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="mt-2">
                    <button type="submit" class="btn btn-success font-weight-bold">TẠO</button>
                  </div>
              </form>    
          </div>

          <!--HẾT PHẦN NỘI DUNG-->
@stop