<?php 


// Exercise One

// $str1 = "00004";
// $str2 = "008";
// $str3 = "00007";

// if($str2 < $str1) {
//     echo "$str1 is less than $str2<br/>";
// }
// if($str3 < $str2) {
//     echo "$str3 is less than $str2<br/>";
// }
// if($str1 < $str3) {
//     echo "$str1 is less than $str3<br/>";
// }

// $one = "1000";
// $two = "2000";
// $three = "3000";

// if ($one < $two){
//     echo "$one is less than $two";
// }


// Exercise Two

// $one = 52;

// for ($i=1; $i <=10; $i++) 
// {
//     echo $one. " x ".$i. "=" . $i*$one . "<br>";
// }



// Exercise Three

// for($i=1;$i<=100;$i++)
//     {      
//         $b=0;
//         for($j=1;$j<=$i;$j++)
//         {
//             if($i%$j==0)
//             {
//                 $b=$b+1;
//             }
//         }
//         if($b==2)
//         {
//             echo ' '.$i;
//         }
//     }


// Exercise Four


// function countdown($num_arg) 
// {
// 	if($num_arg > 0)
// 	{
// 		print("$num_arg<br>");
// 		countdown($num_arg - 1);
// 	}
// }
// countdown(10);



// Exercise Six

// $one = 'Cristiano , Ronaldo, Portuguese Footballer, Born In, February 5 1985';
// $a = explode(',', $one);

// print_r ($a);




// Exercise Seven **


// Exercise Eight


// $input = 'The term <i>Official Ireland</i> is commonly <br />' .
// 	'used in  <b>the Republic of Ireland</b> to denote<br />' .
// 	' the media, cultural and religious establishment. '.
// 	'<script>alert("Nice try!");</script>' .
// 	'<img src="/spam.jpg" />';
	
// echo strip_tags($input, '<b>');


// Exercise Nine

// $a = array('One' => 'BMW', 'Two' => 'Toyota', 'Three' =>'Honda', 'Four' => 'Nissan');

// foreach ($a as $key => $value) {
//     echo $key , $value. '<br>';
// }
 

/* Exercise Eleven

$file = fopen("test.txt","r");
echo fgets($file);
$file = fopen("test.txt","r");
while ($a=fgets($file)) {
    echo $a;
}
$file = fopen("test.txt","r");
while ($a=fgets($file)) {
    echo $a;
}
fclose($file);


$file = fopen("test.txt","r");
while ($a=fgetc($file)) {
    echo $a;
}

*/


/*   Exercise Twelve

$quantity1 = 70;
$quantity2 = 100;
$price1 = 1035;
$price2 = 1200;

function deal($quantity1, $quantity2, $price1, $price2) 
	{
		$deal1 = $price1 / $quantity1;
		$deal2 = $price2 / $quantity2;
		return($deal1 < $deal2);
    }

	if(deal($quantity1, $quantity2, $price1, $price2)) {
		print("The first deal is best!");
	}
	else 
	{
		print("The second deal is best!");
	}
    
*/


//    Exercise Thirteen**



//   Exercise Fourteen**

//   Exercise Fifteen

/* Create the size of image or blank image 
header("Content-Type: image/png"); 

$image = imagecreate(500, 300); 

// Set the background color of image 
$background_color = imagecolorallocate($image, 0, 153, 0); 
  
// Set the text color of image 
$text_color = imagecolorallocate($image, 255, 255, 255); 
  
// Function to create image which contains string. 
imagestring($image, 245, 180, 100,  "TECHIBITS", $text_color); 
imagepng($image); 
imagedestroy($image); */




//   Exercise Sixteen

// $studentdata = simplexml_load_file('student.xml');

//     foreach($studentdata as $student){
//         echo 'Firstname: '.$student->firstname.'<br/>';
//         echo 'Lastname: '.$student->lastname.'<br/>';
//         echo 'Age: '.$student->age.'<br/>';
//         echo 'Class: '.$student->class.'<br/><br/>';}




//   Exercise Seventeen **

//   Exercise Eighteen 


// function checkLeapYear($year) {
//     return checkdate(2, 31, $year);
// }

// echo checkLeapYear(2024) ? "2024 is a leap year." : "2024 is not a leap year. ";
// echo '<br/>';



//   Exercise Nineteen 

// $one = 0;
// $two = 1;
// $number = 10;
// echo $one;
// for($i = 1; $i <= $number; $i++) {
//     $three = $one + $two;
//     $one = $two;
//     $two = $three;
//     echo $three ."<br/>"; 
// }

//   Exercise Twenty **



//   Exercise TwentyOne**


//   Exercise TwentyTwo


// $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
// $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
// $webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
// $blkberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
// $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

// if ($iphone || $android || $webos || $ipod || $blkberry == true)
// {
//    header('Location: https://www.google.com/');
// }
// else {
//    header('Location: htt://www.google.com/');
// }


//   Exercise TwentyThree


// $to = $_POST['to'];
// $from = $_POST['from'];

// $headers = 'From: '.$from.'\r\n';
// $mailsent = mail($to ,  $headers);
// if($mailsent) {
// echo 'Mail has been sent<br/><br/>';
// } else {
// echo 'Error in the message.';
// }


//   Exercise TwentyFour


// $ip =  $_SERVER['REMOTE_ADDR'];
// $ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/?ip=".$ip));




//   Exercise TwentyFive**

//   Exercise TwentySix**

//   Exercise TwentySeven**

//   Exercise TwentyEight**

//   Exercise TwentyNine

// $one = "Hello World";
// echo "Techibits" . mb_substr($one, 0, -5);


//   Exercise Thirty

// $string = 'Welcome to TechiBits';
// $str_len 	= strlen($string);
// echo "Reversed String: "; 
  
// for ( $x = $str_len - 1; $x >=0; $x--){
//   echo $string[$x];}





//   Exercise ThirtyOne



// function cal_percentage($one, $two) {
//   $count1 = $one / $two;
//   $count2 = $count1 * 100;
//   $count = number_format($count2, 0);
//   return $count;
// }

// // calling function to calculate percentage
// echo cal_percentage(39, 100).'%<br/>';
// echo cal_percentage(20.2, 100).'%';



//   Exercise ThirtyTwo

/*
$email = "@gmail.com"; 
$email = filter_var($email , FILTER_SANITIZE_EMAIL); 
if (!filter_var($email , FILTER_VALIDATE_EMAIL) === false) { 
    echo("$email is valid"); 
} else { 
    echo("$email is invalid"); 
} 
*/


//   Exercise ThirtyThree Index.php


//  Exercise ThirtyFour **



//  Exercise ThirtyFive **



#define stdObjects to store employee details

// function convert_object_to_array($data) {

//   if (is_object($data)) {
//       $data = get_object_vars($data);
//   }

//   if (is_array($data)) {
//       return array_map(__FUNCTION__, $data);
//   }
//   else {
//       return $data;
//   }
// }



//  Exercise ThirtySix


// class Person {
//   public $name = "John Doe";
//   public $age = 30;
// }
// $person = new Person();
// $array = (array) $person;
// print_r($array);


//  Exercise ThirtySeven**

//  Exercise ThirtyEight**

//  Exercise ThirtyNine


//  Exercise Foutry


echo "The current directory of this file is '" . __DIR__ . "'.\n";

echo "The current file with path is '" .  __FILE__ . "'.\n";

echo "The line number of this code is '" .  __LINE__ . "'.\n";





    ?>