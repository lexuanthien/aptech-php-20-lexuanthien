<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Đăng Ký</title>

    <link rel="icon" href="{{ url('http://localhost:8000/websitenews/image/logo.jpg') }}">

    <link rel="stylesheet" href="{{ url('http://localhost:8000/websitenews/css/style.css') }}"> 
</head>

<body>

    @include('page_home.layout.menu')

    <!-- PHẦN NỘI DUNG -->
        <div class="mag-login-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="login-content bg-white p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Let's Join Us!</h5>
                        </div>

                        <form action="index.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Confirm Password">
                            </div>
                            
                            <button id="nutlogin" type="submit" class="btn btn-outline-light rounded-0">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    @include('page_home.layout.footer')
</body>

</html>