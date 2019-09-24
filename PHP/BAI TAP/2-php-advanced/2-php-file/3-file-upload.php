<?php
echo "<a href=\"./\">BACK</a>";
/* 3. --- FILE UPLOAD ---
 *
 * File upload is a form html with method post and attribute enctype
 *
 */

echo "<h1>3. FILE UPLOAD</h1>";

/*
 * EXERCISE 1 : Upload some images into folder uploads.
 *
 */

/*
 * SUGGESTION : DO IT OUTSIDE <?php and ?>
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
?>
<!-- <!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="<?php echo $_SERVER['HTTP_SELF']; ?>" method="POST" enctype="multipart/form-data">
Select image to upload : <input type="file" name="fileToUpload" id="fileToUpload">
<br>
<input type="submit" value="Submit" name="submit">
</form>
</body>
</html> -->
<?php
/* $targetDirectory = "uploads/";
if (!file_exists($targetDirectory)) {
mkdir($targetDirectory, 0777, true);
}
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
$isUploadSuccess = true;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
if ($_POST["submit"]) {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
echo "File is an image - " . $check["mime"] . ".<br>";
$isUploadSuccess = true;
} else {
echo "File is not an image<br>";
$isUploadSuccess = false;
}
}

if (file_exists($targetFile)) {
echo "File is already exists<br>";
$isUploadSuccess = false;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
echo "File is too large<br>";
$isUploadSuccess = false;
}

if (!preg_match("/(gif|jpe?g|tiff|png)$/i", $imageFileType)) {
echo "Only GIF, JPG, JPEG, TIFF & PNG files are allowed";
$isUploadSuccess = false;
}

if (!$isUploadSuccess) {
echo "Something wrong, your file can not upload";
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
} else {
echo "There was an error uploading your file";
}
} */
?>