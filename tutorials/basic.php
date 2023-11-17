<?php

// Variable Make Syntex

$variable1 = 100;
$variable2 = 200;


echo $variable1 , $variable2;
echo $variable1 + $variable2;





// Constant Syntex

define("GREETING", "Welcome To TechiBits");
echo GREETING ;

echo "<br>";





// ARRAYS SYNTEX

$languages = array ("Python" , "C++" , "Java" , "MySQL" );

// print_r($languages);
echo $languages[0];     // This one is to find the value like if I use [2] they show me Java
echo count($languages); // This one is count how many value is store in your array

echo "<br>";






// FUNCTION SYNTEX

function lenevo(){
echo "ONE";}

lenevo();



// There are Eight (8) Types of Operators

// Arithmetic Operators
// Assignment Operators
// Comparison Operators
// Increment/Decrement Operators
// Logical Operators
// String Operators
// Array Operators
// Conditional Assignment Operators


// 2. Assignment Operators
$Arithmetic1 = 10;
$Arithmetic2 = 20;

$Assignment1 = $Arithmetic1;

$Assignment1 += 12; // Plus
$Assignment1 -= 2;  // Minus
$Assignment1 *= 2;  // Multiply
$Assignment1 /= 2;  // Divide
$Assignment1 %= 22;  // Modulus
echo "The Value Of Assignment1 = Assignment2 is";
echo $Assignment1;

echo "<br>";

// 3. Comparison Operators


echo "The value is 1==4 is";
echo var_dump(1==4);
echo "<br>";


echo "The value is 1===4 is";
echo var_dump(1===4);
echo "<br>";


echo "The value is 1!=4 is";
echo var_dump(1!=4);
echo "<br>";


echo "The value is 1<>4 is";
echo var_dump(1<>4);
echo "<br>";


echo "The value is 1!==4 is";
echo var_dump(1!==4);
echo "<br>";


echo "The value is 1>4 is";
echo var_dump(1>4);
echo "<br>";


echo "The value is 1<4 is";
echo var_dump(1<4);
echo "<br>";


echo "The value is 1>=4 is";
echo var_dump(1>=4);
echo "<br>";


echo "The value is 1<=4 is";
echo var_dump(1<=4);
echo "<br>";


// 4. Increment/Decrement Operators

$incdec = 20;

echo $incdec++; 
echo "<br>";
echo $incdec--;
echo "<br>";
echo ++$incdec;
echo "<br>"; 
echo --$incdec; 


// 5. Logical Operators

// Operator	  Name	        Example	             Result	

// and	      And	         $x and $y	   True if both $x and $y are true	
// or	        Or	         $x or $y	     True if either $x or $y is true	
// xor	      Xor	         $x xor $y	   True if either $x or $y is true, but not both	
// &&	        And	         $x && $y	     True if both $x and $y are true	
// ||	        Or	         $x || $y	     True if either $x or $y is true	
// !	        Not	         !$x	         True if $x is not true


$logical = 220;


$logical = (true and true);
echo var_dump($logical);
echo "<br>"; 



// There are Eight (8) Data Types

// String         " $x = "Hello world!"; "
// Integer        "$x = 5985;"
// Float          "$x = 10.365;"
// Boolean        "$x = true;"
// Array          "$cars = array("Volvo","BMW","Toyota");"
// Object         
// NULL           "$x = null;"
// Resource       "In Advance PHP"






// IF ELSE CONDITION Syntex


$age = 18;
if($age>=18){
    echo "You're Invited";
}
else if($age==5){
        echo "You're Bareek";
}

else{
    echo "You're To Small";
}

echo "<br>";






?>
