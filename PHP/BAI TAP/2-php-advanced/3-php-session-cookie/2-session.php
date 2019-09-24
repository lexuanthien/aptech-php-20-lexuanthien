<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- SESSION ---
 *
 * setcookie(name,value,expire,path,domain,secure,httponly);
 *
 * setcookie must be set in top of file.
 *
 * NOTE : after setcookie, should be refresh page
 */

echo "<h1>2. SESSION</h1>";

/*
 * EXERCISE 1 : Set your name and name of your project in session and display it, then destroy it.
 *
 */

/*
 * SUGGESTION :
 * session_start();
 * $_SESSION["myName"] = "Nguyen Hai Nam";
 * $_SESSION["myProject"] = "News Website";
 * print_r($_SESSION);
 *
 * COMMENT ABOVE THEN USING BELOW FUNCTION
 * session_destroy();
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
