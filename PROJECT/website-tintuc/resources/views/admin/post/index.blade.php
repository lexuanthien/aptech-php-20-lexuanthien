@extends('master')
@section('phannoidung')
    <!-- BẮT ĐẦU PHẦN NỘI DUNG -->
      <h1>List Page - Trang Bài Viết</h1>
      <hr>
      <div class="mx-4">
        <form action="{{ route('posts.create')}}" method="GET">
            <button type="submit" class="btn btn-info rounded-0 font-weight-bold">TẠO BÀI VIẾT MỚI</button>
        </form>  
      </div>
      <div class="mx-4">
      <table class="table table-bordered mt-3">
        <thead>
        <tr class="text-center text-danger">
                <?php
                    $PostArray = ['ID','TITLE','DESCRIPTION','THỂ LOẠI','TIN HOT','IMAGE','XEM','SỬA','XÓA'];
                    for($i=0 ; $i < count($PostArray); $i++) {
                        echo "<th>" . $PostArray[$i] . "</th>";
                    }
                ?>
            </tr>
        </thead>

        <tbody class="text-center text-dark ">
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->category->name}}</td>
                    <td>
                      @if($post->tin_hot == 1) {{'TIN BÌNH THƯỜNG'}}
                      @else {{'TIN HOT'}}
                      @endif
                    </td>
                    <td>
                        <img src="{{ asset('uploads/posts/' . $post->image) }}" width="100px;" height="100px;">
                    </td>
                    <td>
                        <form action="{{ route('posts.show', $post->id)}}" method="GET">
                            <button type="submit" class="btn btn-success">SHOW</button>
                        </form>
                    </td>
                    <td>    
                        <form action="{{ route('posts.edit', $post->id)}}" method="GET">
                            <button type="submit" class="btn btn-warning mx-2">EDIT</button>
                        </form>
                    </td>
                    <td>    
                        <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                <tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    </div>
    <!-- HẾT PHẦN NỘI DUNG -->
@stop

