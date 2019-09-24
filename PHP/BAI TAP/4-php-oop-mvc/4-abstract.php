<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- INTERFACE ---
 *
 *
 */

echo "<h1>2. INTERFACE</h1>";

/*
 * EXERCISE 1 : Create an abstract and using class implement it.
 *
 */

/*
 * SUGGESTION :
abstract class Hero
{
protected $name;
public function __construct($name = "Undefined")
{
$this->name = $name;
}
abstract public function setName($name);
abstract public function getName();
public function display()
{
echo "This one is a hero, his/her name is $this->name";
}
}

class Antimage extends Hero
{
public function setName($name)
{
$this->name = $name;
return $this;
}

public function getName()
{
return $this->name;
}

}

$antimage = new Antimage;
$name = $antimage->setName("Antimage")->getName();
echo $name . "<br>";
$antimage->setName("Antimage2")->display();

 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
