@extends('master')
@section('phannoidung')
            <!--PHẦN NỘI DUNG-->

              <h1>Create Page - Tạo Bài Viết Mới</h1>
              <hr>
              <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value={{csrf_token()}}>
      
                  <div class="form-group">
                      <label for="">TITLE:</label>
                      <input type="text" class="form-control" name="title" placeholder="Tiêu đề của bài viết">
                  </div>
      
      
                  <div class="form-group">
                      <label for="">DESCRIPTION:</label>
                      <div><textarea name="description" cols="100%" rows="5" placeholder=" Miêu tả của bài viết"></textarea></div>
                  </div>
                  <div class="form-group">
                      <label for="">CONTENT:</label>
                      <div><textarea name="content" id="editor1" rows="200" cols="100%">
                          Điền nội dung của bài viết vào đây.
                      </textarea><div>
                  </div>
                  <br>
                  
                  <div>
                    <label for="">THỂ LOẠI BÀI VIẾT: </label>
                    <select name="category_id">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">
                            {{$category->name}}
                          </option>
                        @endforeach
                    </select>
                  </div>
                  <br>
                  <div class="form-group">
                    <label>TIN NỔI BẬT:</label>
                    <label class="radio-inline">
                      <input name="news" value="1" checked="" type="radio"> News
                    </label>
                    <span> - </span>
                    <label class="radio-inline">
                      <input name="news" value="2" type="radio"> Hot News
                    </label>
                  </div>

                  <div class="form-group">
                    <label for="">IMAGE: </label>
                    <input type="file" name="image">
                  </div>

                  <br>
                  <button type="submit" class="btn btn-success font-weight-bold">TẠO BÀI VIẾT</button>
                </form>
      
                <script src="{{ asset('websitenews/ckeditor/ckeditor.js') }}"></script>
      
                <script>
                  CKEDITOR.replace('editor1');
                </script>
          </div>

          <!--HẾT PHẦN NỘI DUNG-->
@stop