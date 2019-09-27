<!doctype html>
<html lang="en">
  <head>
    <title>Table</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
            table,
            thead,
            tbody,
            tr, td, th {
                border: 1px solid darkcyan;
            }
    </style>
  </head>

  <body>

    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "aptech_php_20_thien";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    ?>
    <br>
    
    <table class='text-center'>
    <thead>
        <tr>
            <?php
                $colum_name = ['ID', 'NAME', 'EMAIL', 'Action'];
                for ($i = 0; $i < count($colum_name); $i++) {
                echo "<th>" . $colum_name[$i] . "</th>";
            }
            ?>
        </tr>
        </thead>

    <tbody>
        <?php
            $sql = "select * from aptech_php_20_thien.users";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>";
            ?>
                <a href="#" class="btn btn-primary">Show</a>
                
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
                
            <?php
                echo "</td>";
            echo "</tr>";
            }
            ?>

    </tbody>
    </table>  
</form>
</body>
</html>