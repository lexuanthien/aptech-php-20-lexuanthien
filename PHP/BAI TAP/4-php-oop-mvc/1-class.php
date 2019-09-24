<?php
echo "<a href=\"./\">BACK</a>";
/* 1. --- CLASS ---
 *
 *
 */

echo "<h1>1. CLASS</h1>";

/*
 * EXERCISE 1 : Create class Project with __construct, set, get and display functions. Create an instance and display your project's name.
 *
 */

/*
 * SUGGESTION :
class Hero
{
protected $name;

public function __construct($name = "Undefined")
{
echo "Begin of class<br>";
$this->name = $name;
}

public function setName($name)
{
$this->name = $name;
return $this;
}

public function getName()
{
return $this->name;
}

public function display()
{
echo $this->name;
}

public function __destruct()
{
echo "<br>End of class";
}

}

$antimage = new Hero;
$antimage->setName("ANTIMAGE")->display();

 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
class Hero
{
    protected $name;

    public static function helloWorld()
    {
        echo "Hello World.<br>";
    }

    public function __construct($name = "Undefined")
    {

        echo "Begin of class<br>";
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function display()
    {
        echo $this->name . "<br>";
    }

    public function __destruct()
    {
        echo "End of class.<br>";
    }

}
Hero::helloWorld();
$antimage = new Hero;
$antimage->setName("ANTIMAGE")->display();
