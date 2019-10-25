
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
        <span class="badge badge-success">INDEX PAGE</span>
        <div class='pt-3'>
        <table class="table table-bordered"> <!-- comment: ctrl + k + c -->
            <thead  class='table-info'>
              <tr class="text-danger text-center">
                
              <?php
                $array = ['#','NAME','EMAIL','PASSWORD', 'ACTION'];
                for($i=0;$i < count($array); $i++) {
                echo "<th>" . $array[$i] . "</th>"; 
                }
              ?>
                
              </tr>

            </thead>

            <tbody class="table-secondary">