
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
            <div class="col-3 pt-2">
              <form action="{{ route('users.index') }}" method="GET">
                <button type="submit" class="btn btn-primary rounded-0 font-weight-bold" href="#">Home</button>
              </form>  
            </div>
            <div class="col-6 d-flex justify-content-center">
                <h1 class="text-info">CREATE AN USERS.</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="pt-1"><span class="badge badge-success">CREATE PAGE</span></div>
    </div>

<div class="container mt-4">
    <div class="jumbotron">
        <h1>Create User.</h1>      
        <p>Tạo tài khoản người dùng.</p>
        <form action="{{ route('users.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>NAME:</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập Username Của Bạn.">
            </div>
            <div class="form-group">
                <label>EMAIL:</label>
                <input type="text" class="form-control" name="email" placeholder="Nhập Địa Chỉ Email Của Bạn.">
            </div>
            <div class="form-group">
                <label>PASSWORD:</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập Mật Khẩu Của Bạn.">
            </div>
            <div class="mt-2">
            <button type="submit" class="btn btn-success font-weight-bold">CONFIRM</button>
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

