<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
        TÊN CỦA BẠN: <input type="text" name="ten" placeholder="Nhập tên của bạn..."><br>
        DỰ ÁN:       <input type="text" name="duan" placeholder="Nhập dự án của bạn..."><br>
        <input type="submit" value="Gửi">
    </form>
    <?php
        if(!empty($_GET["ten"]) && !empty($_GET['duan'])) {
            echo "TÊN CỦA BẠN LÀ: " . $_GET['ten'] . "<br>";
            echo "DỰ ÁN CỦA BẠN LÀ: " . $_GET['duan'];
        }

        //action="<?php $_SERVER['PHP_SELF'] không có hình như cũng được
    ?>

    
</body>
</html>