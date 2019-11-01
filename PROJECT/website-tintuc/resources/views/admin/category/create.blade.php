@extends('master')
@section('phannoidung')
            <!--PHẦN NỘI DUNG-->

              <h1>Create Category - Tạo Một Thể Loại Mới</h1>
              <hr>
              <form action="{{ route('categories.store') }}" method="POST">
                  <input type="hidden" name="_token" value={{csrf_token()}}>
      
                  <div class="form-group">
                    <label for="">Categories Name:</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Categories Name">
                  </div>
                  <div class="mt-2">
                    <button type="submit" class="btn btn-success font-weight-bold">THÊM</button>
                  </div>
              </form>    
          </div>

          <!--HẾT PHẦN NỘI DUNG-->
@stop