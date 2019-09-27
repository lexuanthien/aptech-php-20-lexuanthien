<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "aptech_php_20_lxt";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    ?>

<div class="jumbotron text-center">
  <h1>NHỮNG TIN TỨC CỦA TRÁI ĐẤT</h1>
  <i>Hãy nghe nhạc buồn tại kênh Youtube "MUSIC - NGUỒN CẢM XÚC" !</i> 
</div>
  
    <?php
            $sql = "SELECT * FROM aptech_php_20_lxt.post INNER JOIN aptech_php_20_lxt.categories ON post.cate_id = categories.id";
            $result = mysqli_query($conn, $sql);
    ?>        
    <div class="container">
        <div class='row'>
    <?php    
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<div class='col-sm-4'>";
                    echo "<h4>" . $row['title'] . "</h4>";
                    echo "<br>" . $row['content'];
                    echo "<br>" . "<i><b>" . $row['name'] . "</i></b>";
                    echo "</div>";
                    
                }
            } else {
                echo "0 results";
            }
            
            mysqli_close($conn);
    ?>        

  <!-- <div class="row">
    <div class="col-sm-4">
      <h3><?php  ?></h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div> -->
        </div>
</div>

</body>
</html>
