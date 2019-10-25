<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Table Users</title>
</head>
<body>
<div class="container pt-3">
        <div class="row">
            <div class="col-2 pt-2">
              <form action="{{ route('users.index') }}" method="GET">
                <button type="submit" class="btn btn-primary rounded-0 font-weight-bold" href="#">Home</button>
              </form>  
            </div>
            <div class="col-8 d-flex justify-content-center">
                <h1 class="text-info">APTECH PHP LARAVEL CRUD USERS</h1>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <hr>
    <div class="container">
        <h5>INDEX PAGE</h5>
        <table class="table table-bordered mt-3">
        <thead>
            <tr class="text-center text-secondary">
                <?php
                    $userArray = ['#','NAME','EMAIL','ACTION'];
                    for($i=0 ; $i < count($userArray); $i++) {
                        echo "<th>" . $userArray[$i] . "</th>";
                    }
                ?>
            </tr>
        </thead>

        <tbody class="text-center">
            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex justify-content-center">
                        <form action="{{ route('users.show', $user->id)}}" method="GET">
                            <button type="submit" class="btn btn-success">SHOW</button>
                        </form>
                        <form action="{{ route('users.edit', $user->id)}}" method="GET">
                            <button type="submit" class="btn btn-warning mx-4">EDIT</button>
                        </form>
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
    <hr>
    <div class="container my-3">
        <div class="row">
            <div class="col-6"><a class="text-muted">APTECH PHP LARAVEL CRUD USERS</a></div>

            <div class="col-6 d-flex justify-content-end">
              <form action="{{ route('users.create') }}" method="GET">
                <button type="submit" class="btn btn-info rounded-0 font-weight-bold">CREATE AN USER</button>
              </form>  
            </div>
        </div>   
    </div>
</body>
</html>

