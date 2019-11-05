@extends('master')
@section('phannoidung')
    <!-- BẮT ĐẦU PHẦN NỘI DUNG -->
      <h1>Comments Page - Quản Lý Bình Luận</h1>
      <hr>
      <!-- <div class="mx-4">
        <form action="{{ route('users.create')}}" method="GET">
            <button type="submit" class="btn btn-info rounded-0 font-weight-bold">THÊM CHỨC NĂNG MỚI CHO USER</button>
        </form>  
      </div> -->
      <div class="mx-4">
      <table class="table table-bordered mt-3">
        <thead>
        <tr class="text-center text-danger">
                <?php
                    $PostArray = ['ID','NỘI DUNG BÌNH LUẬN','NGƯỜI BÌNH LUẬN', 'BÀI VIẾT','EDIT', 'XÓA'];
                    for($i=0 ; $i < count($PostArray); $i++) {
                        echo "<th>" . $PostArray[$i] . "</th>";
                    }
                ?>
            </tr>
        </thead>

        <tbody class="text-center text-dark ">
            @foreach($comment as $comments)
                <tr>
                    <td>{{ $comments->id }}</td>
                    <td>{{ $comments->content_comment }}</td>
                    <td>{{ $comments->user->name }}</td>
                    <td>{{ $comments->post->title }}</td>
                    <td> 
                      <form action="{{ route('comments.edit', $comments->id)}}" method="GET">
                        <button type="submit" class="btn btn-warning mx-2">EDIT</button>
                      </form>
                    </td>
                    <td class="">
                    <form action="{{ route('comments.destroy', $comments->id)}}" method="POST">
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

