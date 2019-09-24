<?php
$testCreate = fopen("testcreate.txt", "w") or die("Unable to open file!"); //lệnh tạo ra 1 file tên testcreate.txt
    $text = "LÊ XUÂN THIỆN"; //tạo 1 biến
    fwrite($testCreate, $text); //fwrite dùng để chèn biến $text vào file testcreate.txt vưa tạo
fclose($testCreate); //đóng
?>