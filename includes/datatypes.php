<?php echo 'Hello, World!';
$myMessage = 'My First PHP!';

//commenting types 
# commenting types
/** commenting types for multi lines */

/** 
 * Data types
*/
//string
$myString = 'Hello, World!';
//Integer.
$myInteger = 34;
//Float/Double
$myFloat = 3.14;
//Boolean
$myBoolTrue = True;
$myBoolFalse = False;
//Null
$myNull = NULL;
//Object
$myObject = new stdClass();
//Array.
$myArray = [' First Item', 2, 'third item'];
$myOtherArray = array(
    $myString,
    $myInteger,
    $myFloat,
    $myBoolTrue,
    $myBoolFalse,
    $myNull,
    $myObject,
    $myArray
);

/** 
 * STRINGS 
 * */
 $string1 = 'Hello, my name is ';
 $string2 = 'Michael Jackson';

 //we concatenate strings using the "." character. ("+" is reserved for addition.)
 $concattedString = $string1 . $string2;

 //Difference between single and double quotes.
 $mySingleQuoteHelloString = 'Hi there! My name is $string2';

 //Double quotes are PARSED. PHP checks for variables names to echo out.
 $myDoubleQuoteHelloString = "Hi there! My name is $string2";

 //This is more specific, and would be good if you have overlapping variable names.
 $myDoubleQuoteHelloString2 = "Howdy there! My name is {$string2}";