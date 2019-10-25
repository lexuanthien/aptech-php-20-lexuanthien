
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

    <style>
        .homee {
            padding: 5px;
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="container pt-3">
        <div class="row">
            <div class="col-3 pt-2">
              <form action="" method="get">
                <button type="submit" class="btn btn-primary rounded-0 font-weight-bold" href="#">Home</button>
              </form>  
            </div>
            <div class="col-6 d-flex justify-content-center">
                <h1>LARAVEL TABLE USERS.</h1>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <hr>

    <div class="container">
        <span class="badge badge-success">EDIT PAGE</span>
        <div class='pt-3'>

        <form action="/hienthidulieunguoidung/{{ $users-> id }}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value={{csrf_token()}}>
            <div class="form-group"></div>
                <h5>NAME</h5>
                <input type="text" class="form-control" name="name-nguoi-dung" value="{{$users->name}}"> 
                <!-- thêm value để ô input đó hiển thị thông tin cũ của người dùng thay cho placeholder="Name Users"-->
            </div>
            <div class="form-group">
                <h5>EMAIL</h5>
                <input type="email" class="form-control" name="email-nguoi-dung" value="{{$users->email}}">
            </div>
            <div class="form-group">
                <h5>PASSWORD</h5>
                <input type="password" class="form-control" name="password-nguoi-dung" placeholder="Password Users">
            </div>
            <button type="submit" class="btn btn-warning font-weight-bold">LƯU THÔNG TIN</button>
        </form>

        </div>
    </div>

    <hr>
    <div class="container mb-5">
        <div class="row">
            <div class="col-6 pt-1"><a class="text-muted">LARAVEL TABLE USERS.</a></div>
            <div class="col-6 d-flex justify-content-end">
                <button type="button" class="btn btn-info rounded-0 font-weight-bold">CREATE AN USER</button>
            </div>
        </div>    
    <div>
</body>
</html>