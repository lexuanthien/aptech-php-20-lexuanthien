
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

    <title>Register</title>
    <style>
        input[type=text],
        input[type=password] {
            width: 350px;
            padding: 12px 20px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 3px solid #6B8E23;
        }
        #registerbutton {
            width: 150px;
            font-weight:bold;
            letter-spacing: 1.5px;
            font-size: 17px;
            background-color: white !important;
            font-family: Arial, Helvetica, sans-serif;
            color:#6B8E23;
        }

        #register {
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
            background-color: rgba(4, 119, 14, 0.5);
            letter-spacing: 1px;
            
        }
        body {
            height: 650px;
            background-color: #F0FFFF;
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
    
<div id="register" class="container">
    <div class="row">
        <div class="col-12">
                <h1 style="letter-spacing: 4px;">Register Form</h1>      
                <form action="" method="POST" class="mt-5">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                            <input type="text" name="email" placeholder="User Name">
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                            <input type="password" name="password" placeholder="Confirm Password">
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <input type="checkbox" name="remember me" value="remember">
                            <span class="ml-2 mb-1 font-weight-bold">I Accept Terms & Conditions</span>
                        </div>    
                    </div>
                    <div class="mt-4">
                        <button id="registerbutton" type="submit" class="btn btn rounded-0">Register</button>
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

