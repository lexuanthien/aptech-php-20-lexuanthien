@extends('master')
@section('phannoidung')
    <!-- BẮT ĐẦU PHẦN NỘI DUNG -->
      <h1>Categories - Thể Loại Bài Viết</h1>
      <hr>
      <div class="mx-4">
        <form action="{{ route('categories.create')}}" method="GET">
            <button type="submit" class="btn btn-info rounded-0 font-weight-bold">THÊM THỂ LOẠI MỚI</button>
        </form>  
      </div>
      <div class="mx-4">
      <table class="table table-bordered mt-3">
        <thead>
        <tr class="text-center text-danger">
                <?php
                    $PostArray = ['ID','NAME','EDIT', 'XÓA'];
                    for($i=0 ; $i < count($PostArray); $i++) {
                        echo "<th>" . $PostArray[$i] . "</th>";
                    }
                ?>
            </tr>
        </thead>

        <tbody class="text-center text-dark ">
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>  
                      <form action="{{ route('categories.edit', $category->id)}}" method="GET">
                        <button type="submit" class="btn btn-warning mx-2">EDIT</button>
                      </form>
                    </td>
                    <td class="">
                    <form action="{{ route('categories.destroy', $category->id)}}" method="POST">
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
