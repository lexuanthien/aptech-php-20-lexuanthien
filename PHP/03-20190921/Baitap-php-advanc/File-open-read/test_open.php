<?php
$testOpen = fopen("read.txt", "r") or die("Unable to open file!"); //r: đọc file read.txt ; w: xóa thông tin trong file read.txt ; ... w3school.
echo fread($testOpen,filesize("read.txt")); // fread() đọc
fclose($testOpen); //fclose() đóng một file đã mở
?>
<br>
<br>
<?php
$testOpen = fopen("read.txt", "r") or die("Unable to open file!");
echo fgets($testOpen); //fgets() đọc 1 dòng duy nhất của file
fclose($testOpen);
?>

<br>
<br>
<?php
$testOpen = fopen("read.txt", "w") or die("Unable to open file!"); //w: xóa dữ liệu trong file
echo fread($testOpen,filesize("read.txt"));
fclose($testOpen);
?>