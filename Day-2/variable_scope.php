<!-- In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global --A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

<?php $x = 5; // global scope
$y = 10;

function myTest() { 
    global $x ,$y;
    //echo $x;
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is:  $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>"; ?>
static -->


<!-- PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly. -->

<?php 
$x = 5;
$y = 10; 
function myTest1() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    echo $GLOBALS["y"];
  }
  myTest1();
  echo $y; // outputs 15
?>

<!-- Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable: -->


<?php function myTest3() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest3();
 
myTest3();
myTest3();


$name = 'Linus';
function myTes4() {
  $name = 'Tobias';
}
myTes4();
echo $name;
?>