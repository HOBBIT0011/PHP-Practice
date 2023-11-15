<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php



$variable1 = 100;
$variable2 = 200;


echo $variable1 , $variable2;
echo $variable1 + $variable2;


// There are Eight (8) Types of Operators

// Arithmetic Operators
// Assignment Operators
// Comparison Operators
// Increment/Decrement Operators
// Logical Operators
// String Operators
// Array Operators
// Conditional Assignment Operators

// 1. Arithmetic Operators

echo "<br>";

$Arithmetic1 = 10;
$Arithmetic2 = 20;
echo "The Value Of Arithmetic1 + Arithmetic2 is";
echo $Arithmetic1 + $Arithmetic2;

echo "<br>";


echo "The Value Of Arithmetic1 - Arithmetic2 is";
echo $Arithmetic1 - $Arithmetic2;

echo "<br>";


echo "The Value Of Arithmetic1 * Arithmetic2 is";
echo $Arithmetic1 * $Arithmetic2;

echo "<br>";


echo "The Value Of Arithmetic1 / Arithmetic2 is";
echo $Arithmetic1 / $Arithmetic2;

echo "<br>";


echo "The Value Of Arithmetic1 % Arithmetic2 is";
echo $Arithmetic1 % $Arithmetic2;

echo "<br>";


echo "The Value Of Arithmetic1 ** Arithmetic2 is";
echo $Arithmetic1 ** $Arithmetic2;

echo "<br>";

// 2. Assignment Operators

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


// echo "The value is 1<==>4 is";
// echo var_dump(1<==>4);
// echo "<br>";



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

// Operator	  Name	         Example	     Result	
// and	      And	         $x and $y	     True if both $x and $y are true	
// or	      Or	         $x or $y	     True if either $x or $y is true	
// xor	      Xor	         $x xor $y	     True if either $x or $y is true, but not both	
// &&	      And	         $x && $y	     True if both $x and $y are true	
// ||	      Or	         $x || $y	     True if either $x or $y is true	
// !	      Not	         !$x	         True if $x is not true


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


/* Object Example



class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();




// This Is Define Constant

define("GREETING", "Welcome To TechiBits");
echo GREETING ;

echo "<br>";

?>
</body>
</html>