@extends('master')
@section('phannoidung')
          <!--PHẦN NỘI DUNG-->
          <h1>Show Page - Hiển Thị Chi Tiết Bài Viết</h1>
          <hr>
      
          <div class="mx-4">
          <table class="table table-bordered mt-3">
            <thead>
            <tr class="text-center text-danger">
                <?php
                    $PostArray = ['ID','TITLE','DESCRIPTION','CONTENT','THỂ LOẠI','TIN HOT','IMAGE','SLUG','EDIT','DELETE', 'HOME'];
                    for($i=0 ; $i < count($PostArray); $i++) {
                        echo "<th>" . $PostArray[$i] . "</th>";
                    }
                ?>
            </tr>
            </thead>

            <tbody class="text-center text-dark ">
             
                <tr>
                    <td>{{ $posts->id }}</td>
                    <td>{{ $posts->title }}</td>
                    <td>{{ $posts->description }}</td>
                    <td>{{ $posts->content }}</td>
                    <td>{{ $posts->category->name}}</td>
                    <td>
                      @if($posts->tin_hot == 1) {{'TIN BÌNH THƯỜNG'}}
                      @else {{'TIN HOT'}}
                      @endif
                    </td>
                    <td>{{ $posts->image }}
                        <img src="{{ asset('uploads/posts/' . $posts->image) }}" width="100px;" height="100px;">
                    </td>
                    <td>{{ $posts->slug}}</td>
                    <td>
                        <form action="{{ route('posts.edit', $posts->id)}}" method="GET">
                            <button type="submit" class="btn btn-warning mx-2">EDIT</button>
                        </form>
                    </td>
                    <td>    
                        <form action="{{ route('posts.destroy', $posts->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                    <td>
                      <form action="{{ route('posts.index', $posts->id)}}" method="GET">
                            <button type="submit" class="btn btn-info mx-2">HOME</button>
                      </form>
                    </td>
                    
                <tr>
             
            </tbody>
          </table>
          </div>
          </div>
          <!--HẾT PHẦN NỘI DUNG-->
@stop