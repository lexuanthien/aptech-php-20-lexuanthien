@extends('master')
@section('phannoidung')
          <!--PHẦN NỘI DUNG-->
              <h1>Edit Page- Chỉnh Sửa Thông Tin Bài Viết</h1>
              <hr>
              <form action="{{ route('posts.update', $posts->id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                      <label for="">TITLE:</label>
                      <input type="text" class="form-control" name="title_edit" value="{{$posts->title}}">
                  </div>
      
      
                  <div class="form-group">
                      <label for="">DESCRIPTION:</label>
                      <div><textarea name="description_edit" cols="100%" rows="5"> {{$posts->description}} </textarea></div>
                  </div>
                  <div class="form-group">
                    <label>CONTENT:</label>
                    <textarea name="content_edit" id="content" rows="10" cols="100%">
                        {{$posts->content}}
                    </textarea>
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
                  <input type="file" name="image" value="{{$posts->image}}">
                </div>


                <div class="mt-2">
                  <button type="submit" class="btn btn-warning font-weight-bold">LƯU</button>
                </div>
              </form>

              <script src="{{ asset('websitenews/ckeditor/ckeditor.js') }}"></script>
      
              <script>
                CKEDITOR.replace('content');
              </script>
          </div>

          <!--HẾT PHẦN NỘI DUNG-->
@stop