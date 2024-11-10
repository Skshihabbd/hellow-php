<!-- print or print(). or echo or echo() -->

<?php print "Hello";
//same as:
print("Hello");

echo "Hello";
//same as:
echo("Hello");

$name = 'Linus';
echo '<h1>Hello $name</h1>';
echo "<h1>Hello $name</h1>";
?>

<!-- There is a big difference between double quotes and single quotes in PHP.

Double quotes process special characters same like as javascript template literal, single quotes does not. -->

<!-- The PHP strlen() function returns the length of a string. -->

<?php 

#echo strlen("sk shihab");
#echo str_word_count("sk shihab");

//The PHP strpos() function searches for a specific text within a string. 
echo strpos("Hello  world!", "l");
?>