<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- FORM HANDLING ---
 *
 * Form data is html form.
 *
 * Can be use some superglobals to get data from form html.
 *
 */

echo "<h1>1. FORM HANDLING</h1>";

/*
 * EXERCISE 1 : Create form, input your name and the project which you wanna do and show it after submit form to itself, using method POST
 *
 */

/*
 * SUGGESTION : DO IT OUTSIDE the <?php ?>
 *
 * <!DOCTYPE html>
 * <html>
 * <head>
 * </head>
 * <body>
 * <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
 * Name : <input type="text" name="name">
 * <br>
 * Project : <input type="text" name="project">
 * <br>
 * <button type="submit">Submit</button>
 * </form>
 * </body>
 * </html>
 * <?php
 * if ($_SERVER["REQUEST_METHOD"] == "POST") {
 * $name = $_POST["name"];
 * $project = $_POST["project"];
 * echo "Your name is $name and name of your project is $project";
 * }
 * ?>
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
