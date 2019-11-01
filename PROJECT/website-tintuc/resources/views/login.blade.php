
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

    <title>Sign In</title>
    <style>
        input[type=text],
        input[type=password] {
            width: 350px;
            padding: 12px 20px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 3px solid #6B8E23;
        }
        #loginbutton {
            width: 150px;
            font-weight:bold;
            letter-spacing: 1.5px;
            font-size: 17px;
            background-color: #6B8E23 !important;
            font-family: Arial, Helvetica, sans-serif;
            color:White;
        }

        #facebook {
            width: 100%;
            background-color: #4267b2 !important;
            color:White;
        }

        #google {
            width: 100%;
            background-color: red !important;
            color:White;
        }

        /* button[type=submit]:hover {
            color: black !important;
        } */

        #login {
            margin-top: 50px;
            margin-bottom: 50px;
            height: 600px; 
            width: 500px;
            justify-content: center; 
            display: flex; 
            align-items: center; 
            flex-direction: column; 
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
            
        }
        body {
            background-image: url(backgroud.jpg);
            background-color: #FFFFF0;
           
        }
        #click {
            font-size: 17px;
            font-weight:bold;
        }
        #footer {
            background-color: black;
            height: 300px;
        }

        #icon a{
            color: silver;
        }

        #footer-logo,
        #about {
            border-right: 1px solid #444;
        }

        #about {
            color:silver;
        }
        #FAMOUS {
            color: white;
            font-weight: bold;
            font-family: serif;
        }
    </style>
</head>
<body>
    
<div id="login" class="container">
    <div class="row">
        <div class="col-12">
                <h1 style="letter-spacing: 4px;">Login Here</h1>      
                <form action="" method="POST" class="mt-5">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input type="text" name="email" placeholder="EMAIL">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="PASSWORD">
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <input type="checkbox" name="remember me" value="remember">
                            <span class="ml-2 mb-1 font-weight-bold">Remember Me</span>
                        </div>    
                    </div>
                    <div class="mt-4">
                        <button id="loginbutton" type="submit" class="btn btn rounded-0">LOGIN</button>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <button id="facebook" type="submit" class="btn"><i class="fab fa-facebook-f"></i></button>
                        </div>
                        <div class="col-6">
                            <button id="google" type="submit" class="btn"><i class="fab fa-google"></i></button>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div id="click" class="col-12 d-flex align-items-center">
                            <span>To register New Account<span>→ </span> </span>
                            <a class="ml-2" href="#register"><button id="clickhere" style="color:white !important; border: 1px solid;" type="button" class="btn btn-outline rounded-0"> Click Here</button></a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>

<div id="footer">
        <div class="container pt-5">
        <div class="row">
          <div id="footer-logo" class="d-none d-lg-block col-lg-3" style="justify-content: center; display: flex; align-items: center; flex-direction: column; text-align: center;">
                <a id="logo" class="navbar-brand " href="#">
                        <img src="/PROJECT/IMAGE/LOGO.png" height="200px" width="200px" alt="">
                </a>
          </div>
          <div id="about" class="col-sm-9 col-md-6">
                <p id="FAMOUS">FAMOUS SAYING:</p>  
                <b>I'VE NEVER SOUGHT SUCCESS IN ORDER TO GET FAME AND MONEY. IT'S THE TALENT AND THE PASSION THAT COUNT IN SUCCESS...</b><br>
                <b><i>" Thành công lớn nhất là đứng dậy sau mỗi lần bị vấp ngã! "</i></b>
          </div>
          <div class="d-none d-sm-block col-sm-3 col-md-3">
                <ul id="icon" class="list-unstyled m-2">
                 <li><a href="#"><i class="fas fa-user"></i></a></li>
                 <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                 <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
          </div>
        </div>
        <hr>
        </div>
</div>
</body>
</html>

