<?php
/*
 * Above is the opening php tag. Include it in a normal html file (ending in
 *  .php), and inject whatever code you want.
 */
// ^That was a multi-line comment. This line is a single-line comment.
// Comments are completely ignored when running a .php file.


/* INTRODUCTION
 *
 * This file contains brief examples of valid php code. I'll break up the major
 * subsections by multi-line comments, and include smaller labels of what each
 * thing is and what it does. Other things to note:
 *
 * BASIC PHP SYNTAX
 *
 * * Every statement ends in a ;
 * * Loops, ifs, and anything else with a block of code inside it have brackets {}
 * * Variables start with $
 * * Everything is case sensitive
 *
 */



/*
 * BASIC STUFF
 */

// Print the words Hello World
echo "Hello World";

// Create a variable and assign a value
$name = "John Doe";

// Change the value of an existing variable
$name = "Adam Smith"; // HA! There is no difference!

// Variables can hold more than just strings
$number = 12;

// Add two strings together and print
echo "My name is " . "Adam Smith";

// Works with variables too
echo "My name is " . $name;
echo "My name is $name"; // shorter syntax, does the same thing

/*
 * LOGIC STUFF
 */

// If statement
if(1 < 2) {
    // The below code is never executed because 1 < 2 is a lie
    echo "This should never happen!!!";
}

if($name === "Adam Smith") {
    // The below code is executed because we set $name to Adam Smith earlier
    echo "This line is executed";
}

// Else statement
$something = False;
if($something) {
    echo "This isn't executed";
}
else {
    // Only executed if $something evaluates to false
    echo "But this is";
}

// Elseif statement
$somethingElse = True;
if($something) {
    echo "Not used";
}
elseif($something || $somethingElse) {
    echo "This block is triggered!";
}
else {
    echo "Not used because we've already found a matching condition above.";
}

/*
 * List of Logical Evaluators
 * (the things that can go inside an if statement that return a boolean)
 *
 * >   - First thing greater than the second thing
 * >=  - First thing greater than or equal to the second thing
 * <   - Second thing greater than the first
 * <=  - Second thing greater or equal to than the first
 * ==  - Both things equal to each other
 * === - Both things equal to each other *and are the same type*
 * &&  - Both things are true
 * ||  - One of these things are true
 * !   - Item after it is false
 */

// Sample Uses of Logical Evaluators

echo "2" == 2; // True because == will try to convert types
echo "2" === 2; // False because they are not the same type
echo !True; // Returns False
echo !False; // Returns True
echo $number > 5 && $number < 42; // Returns True if number is between 5 and 42
echo $name === "A. S." || $name === "Mr. Q"; // True if name is A. S. or Mr. Q
echo !($name === "Minchow"); // Returns True as long as $name is not "Minchow"

echo !($number > 12) // Returns True if number is not greater than 12.
//This^ could be rewritten as $number <= 12

?>
