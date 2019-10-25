<!--$users-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Show User</title>
</head>
<body>
<div class="container pt-3">
        <div class="row">
            <div class="col-3 pt-2">
              <form action="{{ route('users.index') }}" method="GET">
                <button type="submit" class="btn btn-primary rounded-0 font-weight-bold" href="#">Home</button>
              </form>  
            </div>
            <div class="col-6 d-flex justify-content-center">
                <h1 class="text-info">SHOW USER.</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="pt-1"><span class="badge badge-success">SHOW PAGE</span>
    </div>
</div>
<div class="container mt-2">
    <table class="table table-bordered mt-3">
        <thead>
            <tr class="text-center text-secondary">
                <?php
                    $userArray = ['#','NAME','EMAIL','PASSWORD','CREATED_AT','UPDATED_AT','ACTION'];
                    for($i=0 ; $i < count($userArray); $i++) {
                        echo "<th>" . $userArray[$i] . "</th>";
                    }
                ?>
            </tr>
        </thead>

        <tbody class="text-center">
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->password }}</td>
                    <td>{{ $users->created_at }}</td>
                    <td>{{ $users->updated_at }}</td>
                    <td class="d-flex justify-content-center">
                        <form action="{{ route('users.edit', $users->id)}}" method="GET">
                            <button type="submit" class="btn btn-warning font-weight-bold mx-4">EDIT</button>
                        </form>
                        <form action="{{ route('users.destroy', $users->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger font-weight-bold">DELETE</button>
                        </form>
                    </td>
                <tr>
        </tbody>
    </table>
</div>
<hr>
<div class="container my-3">
    <div class="row">
        <div class="col-6"><a class="text-muted">LARAVEL TABLE USERS</a></div>
    </div>   
</div>
</body>
</html>

