
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Edit Users</title>
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
                <h1 class="text-info">EDIT USERS.</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="pt-1"><span class="badge badge-success">EDIT PAGE</span>
    </div>
</div>
<div class="container mt-3">
    <div class="jumbotron">
        <h1>Editor User.</h1>      
        <p>Chỉnh sửa thông tin người dùng.</p>
        <form action="{{ route('users.update', $users->id)}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>NAME:</label>
                <input type="text" class="form-control" name="name" value="{{$users->name}}">
            </div>
            <div class="form-group">
                <label>EMAIL:</label>
                <input type="text" class="form-control" name="email" value="{{$users->email}}">
            </div>
            <div class="form-group">
                <label>PASSWORD:</label>
                <input type="password" class="form-control" name="password" value="{{$users->password}}">
            </div>
            <div class="mt-2">
            <button type="submit" class="btn btn-warning font-weight-bold">SAVE</button>
            </div>
        </form>
    </div>
</div>
<hr>
<div class="container my-3">
    <div class="row">
        <div class="col-6"><a class="text-muted">LARAVEL TABLE USERS</a></div>
    </div>   
</div>
</body>
</html>

