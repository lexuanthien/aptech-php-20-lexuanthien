<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <style>
        body {
            background-color: silver;
            color: black;
            font-size: 15px;
        }

        .container {
            justify-content: center;

        }
        .pass {
            margin-top: 5px; 
        }
    </style>

</head>

<body
    style="justify-content: center; display: flex; align-items: center; flex-direction: column; text-align: center;">
    </div>

    <div class="container">
        <h1>Sign Up</h1>
        <form action="./checkSignUp.php" method="POST">
            Name:     <input type="text" name="ten" border-radius=25% placeholder="Nhập tên của bạn"><br>
            Email:    <input type="text" name="email" placeholder="Nhập email của bạn"><br>
            Password: <input type="password" name="pass" placeholder="Nhap mat khau cua ban"><br><br>

            <div class="row">
                <div class="col-5">
                </div>
                <div class="col-2">
                    <input class="btn btn-primary form-control" type="submit" value="ĐĂNG KÝ">
                </div>
                <div class="col-5">
                </div>                      
            </div>
        
        </form>

        
    </div>
    
</body>

</html>