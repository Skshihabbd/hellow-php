<!-- PHP is a Loosely Typed Language just like typescript topics of javascript -->
 <!-- PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch. -->


<!-- PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource -->

<!-- To get the data type of a variable, use the var_dump() function. just like javascript typeof operator uses -->

<?php


$x=5;
var_dump($x);  #-->var_dump() function uses  for getting the data type 
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);


/*
int(5)
int(5)
string(4) "John"
float(3.14)
bool(true)
array(3) {
  [0]=>
  int(2)
  [1]=>
  int(3)
  [2]=>
  int(56)
}
NULL*/
?>

<!-- You can assign the same value to multiple variables in one line: -->

<!-- $x = $y = $z = "Fruit"; -->