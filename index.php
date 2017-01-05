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
 * List of Logical Operators
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

echo !($number > 12); // Returns True if number is not greater than 12.
//This^ could be rewritten as $number <= 12


/**
 * LOOPS
 */

// Executes the code between the {}s as long as the condition between the ()s is true.
$number = 5;
while($number > 0) {
    echo "Your number is $number. ";
    $number --;
}
// Prints: "Your number is 5. Your number is 4. Your number is 3. Your number
// is 2. Your number is 1.

// Does the same thing as the above while loop.
// within the ()s, first statement sets initial code before the loop starts,
// second checks that the condition is true before it loops again,
// third executes after every loop.
for($number = 5; $number > 0; $number --) {
    echo "Your number is $number. ";
    $number --;
}


/**
 * GET, POST, and SESSION
 *
 * Remember, GET and POST are for getting data from the client.
 * GET - visible in URL
 * POST - not visible in URL
 *
 * SESSION is for keeping data persistet between pages, for example, the ID of
 * a logged in user.
 *
 * TODO COOKIES
 */

// Retrieve data from a GET method
// (ie method="get" in an HTML form from the previous page.)
$username = $_GET['username'];

// Same thing for a POST method but use $_POST instead of $_GET
$color = $_POST['favorite_color'];

// Session works the same way except that you have to call...
session_start();
// ...before you can do anything.

// also, session variables you set on your own, whereas GET and POST are set
// on the client side.
$_SESSION['favorite_MLP_character'] = "PewDiePie";

// The string between the []s (AKA the Key) can be whatever you want it to be,
// and you can use that string whenever to retrieve or modify the value that
// $_SESSION['string'] holds, even on a different page entirely.

$pony = $_SESSION['favorite_MLP_character'];
echo $pony; // prints 'PewDiePie'

// Each session is unique to that user. If you want to delete all session
// variables stored for this user, do this:
session_unset();


/**
 * WORKING WITH DATABASES
 */

// Connect to database, store conneciton info in $mysqli
$connection = new mysqli("hostname", "user", "password", "database_name");

// Execute query on the conncted database
$queryResult = $connection->query("SELECT * FROM USERS;"); // Any query can go here.

// TODO add get first row from result as array

?>
