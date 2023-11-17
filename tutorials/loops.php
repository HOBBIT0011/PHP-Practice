<?php

// LOOPS LOGIC

// While Loops
// Jab tak condition ture rhegi white loop , 
//loop mien rhega jab usko value false mile gi to out hojae ga loop se.

$a = 0;
while ($a <= 10) {
   echo "<br>Value Of While Loop Is: ";
   echo $a;
    $a++;
}

echo "<br>";

// Do While Loops
// agar game go aik subway-surfar agar mene var pass kia or usko one (1) dedia banda bhaag rha hai (1) chal rha hai
// jese banda kisi bhi cheez se takray to $var = 2; activate hojae ga or out hojae ga 

$a = 0;
do {
   echo "<br>Value Of Do While Loop Is: ";
   echo $a;
    $a++;
} while ($a <= 10);

echo "<br>";


// For Loop

for ($a=0; $a < 10; $a++) { 
    echo "<br>The value of For Loop is: ";
    echo $a;
}

echo "<br>";




$languages = array ("Python" , "C++" , "Java" , "MySQL" );

// ForEach Loop

foreach ($languages as $value) {
  echo "<br> The Value Of ";
  echo $value;
}

echo "<br>";


// Make A Table "For Loop" 

$one = 2;

for ($i=1; $i <=10; $i++) 
{
    echo $one. " x ".$i. "=" . $i*$one . "<br>";
}



?>