
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
    
    <link rel="stylesheet" href="{{ url('http://localhost:8000/webtintuc/css/login_admin.css') }}">
</head>
<body>
    
<div id="dangnhap" class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="letter-spacing: 0px;">ADMIN</h1>      
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
            
        </div>
    </div>
</div>
</body>
</html>

