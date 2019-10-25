
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Create User</title>
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

<div class="container mt-4">
        <h5>CREATE PAGE</h5>
        <form action="{{ route('users.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>NAME:</label>
                <input type="text" class="form-control" name="name" placeholder="Username">
            </div>
            <div class="form-group">
                <label>EMAIL:</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label>PASSWORD:</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="mt-2">
            <button type="submit" class="btn btn-danger font-weight-bold">CONFIRM</button>
            </div>
        </form>
</div>
<hr>
    <div class="container my-3">
        <div class="row">
            <div class="col-6"><a class="text-muted">APTECH PHP LARAVEL CRUD USERS</a></div>
        </div>   
    </div>
</body>
</html>

