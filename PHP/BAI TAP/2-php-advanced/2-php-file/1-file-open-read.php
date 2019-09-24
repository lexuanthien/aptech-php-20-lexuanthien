<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- FILE OPEN & READ ---
 *
 * fopen() or die
 * fread(), fgets()
 * feof()
 * fclose()
 *
 */

echo "<h1>1. FILE OPEN & READ</h1>";

/*
 * EXERCISE 1 : open file test.txt and display line by line, remember close before quit.
 */

/*
 * SUGGESTION :
 *
$file = fopen("test.txt", "r") or die("Can't open file.");
while (!feof($file)) {
echo fgets($file) . "<br>";
}
fclose($file);
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
