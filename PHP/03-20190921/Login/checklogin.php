<h1>Check Thông Tin Ver2</h1>
<?php
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Password: " . $_POST['pass'] . "<br>";
    if($_POST['email'] == 'xuanthien14031998qt@gmail.com' && $_POST['pass'] == 'xuanthien1998') {
        // sử dụng PHP redirect để chuyển hướng sang trang khác như dưới 
        header("Location: https://www.facebook.com/testlifeOnlyI");
        exit();

        //hoặc header("Location: https:/namcoi.com");
    }      
    else {
        //echo "<h1>Bạn không được phép truy cập<h1>";
        header("Location: https://www.youtube.com/watch?v=R1NgBax-TBM&t=761s");
    }    
?>