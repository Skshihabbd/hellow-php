<!-- string builtin modification method  -->
<!-- The strtoupper() function returns the string in upper case: -->
<?php 
$x="Hellow World";
echo strtoupper($x);

?>

<!-- strtolower conversion to a string  -->

<?php
$y="HeLLow WoRlD";

echo strtolower($y)
?>

<!-- str_replace() method of string  -->

<?php 
$x="Hellow World";
echo str_replace("World" ,"Dolly",$x)

?>

<!-- string reverse method of an string is strrev -->

<?php 
$x="Hellow World";
echo strrev($x)

?> 

<!-- string method trim() that removes any whitespace from a string  -->
<?php 
$x="  Hellow World";
echo $x;
echo trim($x)

?>
<!-- string explode() method make the string to an array  -->
<?php 

$x="Hellow World!";
$y=explode(" ",$x) ;
#echo $y;
print_r($y);
$x = 5;
$y = 10;
$z = $x.$y; 
// echo $z;
$x = 5;
$y = 10;
$z = "$x . $y"; 
echo $z
?>

