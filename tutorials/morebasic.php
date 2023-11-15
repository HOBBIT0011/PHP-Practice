<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TWO</title>
</head>
<body>
    
<style>

*{
    margin:0px;
    padding:0px;
}

.container{
    background-color:gray;
    color:white;
}

</style>


<div class="container">

<h1>Invitation</h1>
<p>Please Enter Your Age</p>

<?php


// IF ELSE CONDITION


$age = 15;
if($age>18){
    echo "You're Invited";
}
else if($age==5){
        echo "You're Bareek";
}

else{
    echo "You're To Small";
}


echo "<br>";


// ARRAYS

$languages = array ("Python" , "C++" , "Java" , "MySQL" );
echo $languages[0];     // This one is to find the value like if I use [2] they show me Java
echo count($languages); // This one is count how many value is store in your array

echo "<br>";

// LOOPS TOPIC


// While Loops

$a = 0;
while ($a <= 10) {
   echo "<br>The value of a is: ";
   echo $a;
    $a++;
}

echo "<br>";

// Do While Loops

$a = 0;
do {
   echo "<br>The value of a while is: ";
   echo $a;
    $a++;
} while ($a < 10);

echo "<br>";

// For Loop

for ($a=0; $a < 10; $a++) { 
    echo "<br>The value of a For Loop is: ";
    echo $a;
}

echo "<br>";


// ForEach Loop

foreach ($languages as $value) {
  echo "<br> The Value Of ";
  echo $value;
}


// FUNCTION

function lenevo(){
echo "ONE";


}
lenevo();



?>


</div>

</body>
</html>