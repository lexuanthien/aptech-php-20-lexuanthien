<?php
echo "<a href=\"./\">BACK</a>";
/* 3. --- INTERFACE ---
 *
 *
 */

echo "<h1>3. INTERFACE</h1>";

/*
 * EXERCISE 1 : Create 2 interface and using class implement it.
 *
 */

/*
 * SUGGESTION :
interface Move
{
const SPEED = 300;
const STOP = 0;
public function run();
public function stop();
}

interface Hit
{
const BASE_DAMAGE = 50;
public function hit();
}

class Hero implements Move, Hit
{
protected $name;
protected $speed;
protected $damage;

public function __construct($name = "Undefined")
{
echo "Start of class<br>";
$this->name = $name;
$this->display();
$this->speed = Move::STOP;
}

public function run()
{
$this->speed = Move::SPEED;
echo "$this->name is run, speed = $this->speed.<br>";
return $this;
}

public function stop()
{
$this->speed = Move::STOP;
echo "$this->name is stop, speed = $this->speed.<br>";
return $this;
}

public function hit()
{
$this->damage = Hit::BASE_DAMAGE;
echo "With $this->damage damages, $this->name hits to the creep.<br>";
return $this;
}

public function display()
{
echo "Hero's Name : $this->name.<br>";
}

public function __destruct()
{
echo "End of class.<br>";
}
}

$antimage = new Hero("Antimage");
$antimage->run()->hit()->stop();

 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
