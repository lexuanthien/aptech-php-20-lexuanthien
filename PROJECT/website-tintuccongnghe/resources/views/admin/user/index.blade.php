@extends('master')
@section('phannoidung')
    <!-- BẮT ĐẦU PHẦN NỘI DUNG -->
      <h1>Users Page - Trang Người Dùng</h1>
      <hr>
      <div class="mx-4">
        <form action="{{ route('users.create')}}" method="GET">
            <button type="submit" class="btn btn-info rounded-0 font-weight-bold">TẠO USER MỚI</button>
        </form>  
      </div>
      <div class="mx-4">
      <table class="table table-bordered mt-3">
        <thead>
        <tr class="text-center text-danger">
                <?php
                    $PostArray = ['ID','NAME','EMAIL', 'VAI TRÒ','EDIT', 'XÓA'];
                    for($i=0 ; $i < count($PostArray); $i++) {
                        echo "<th>" . $PostArray[$i] . "</th>";
                    }
                ?>
            </tr>
        </thead>

        <tbody class="text-center text-dark ">
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td> 
                      <form action="{{ route('users.edit', $user->id)}}" method="GET">
                        <button type="submit" class="btn btn-warning mx-2">EDIT</button>
                      </form>
                    </td>
                    <td class="">
                    <form action="{{ route('users.destroy', $user->id)}}" method="POST">
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

