
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Đăng Nhập Vào Trang Admin</title>
    
    <link rel="stylesheet" href="{{ url('http://localhost:8000/websitenews/css/login_admin.css') }}">
</head>
<body>
    
<div id="dangnhap" class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="letter-spacing: 3px;">ADMIN</h1>      
            <form action="{{ route('login.store') }}" method="POST" class="mt-3">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <input type="text" name="email" placeholder="Email Đăng Nhập">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password Đăng Nhập">
                </div>
                <div class="mt-4">
                    <button id="registerbutton" type="submit" class="btn btn-success">ĐĂNG NHẬP</button>
                </div>
            </form>
            <br>
            <!-- DÙNG ĐỂ HIỂN THỊ LỖI -->
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            <div>
            @endif
            
            @if(session('thongbao'))
                <div class="alert alert-danger">
                        {{session('thongbao')}}
                </div>
            @endif
            <!-- HIỂN THỊ LỖI -->
            <div class="row mt-4">
                        <div style="letter-spacing: 3px; font-size: 13px;" class="col-12 d-flex align-items-center">
                            <span>TO REGISTER NEW ACCOUNT<span>→ </span> </span>
                            <a class="ml-2" href="/admin/register"><button id="clickhere" style="color:white !important; border: 1px solid;" type="submit" class="btn btn-outline rounded-0"> ĐĂNG KÝ</button></a>
                        </div>
            </div>

        </div>
       
    </div>
</div>
</body>
</html>

