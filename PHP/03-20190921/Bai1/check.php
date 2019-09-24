<h1>Check Thông Tin</h1>
<?php
    echo "Ten: " . $_GET['ten'] . "<br>";
    echo "Password: " . $_GET['pass'] . "<br>";
    if($_GET['ten'] == 'nam' && $_GET['pass'] == '123')
        echo "ĐĂNG NHẬP THÀNH CÔNG";
    else
        echo "ĐĂNG NHẬP THẤT BẠI";    
?>