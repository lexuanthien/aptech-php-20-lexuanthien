<h1>Check Thông Tin Ver2</h1>
<?php
    echo "Ten: " . $_GET['ten'] . "<br>";
    echo "Password: " . $_GET['pass'] . "<br>";
    if($_GET['ten'] == 'nam' && $_GET['pass'] == '123') {
        // sử dụng PHP redirect để chuyển hướng sang trang khác như dưới 
        header("Location: https:/namcoi.com", true, 301);
        exit();

        //hoặc header("Location: https:/namcoi.com");
    }      
    else {
        //echo "<h1>Bạn không được phép truy cập<h1>";
        header("Location: 404.php");
    }    
?>