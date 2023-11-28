<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "customerportal";

$conn = new mysqli($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $data = [
//     ["first_name" => "Mosa", "last_name" => "One", "age" => 30, "dept" => "QA"] ,
//     ["first_name" => "John", "last_name" => "Two", "age" => 27, "dept" => "QA"],
//     ["first_name" => "Abraham", "last_name" => "Three", "age" => 37, "dept" => "QA"],
//     ["first_name" => "Ronaldo", "last_name" => "Four", "age" => 32, "dept" => "QA"]
// ];

// foreach ($data as $record) {
//     echo "Name: 
//     {$record['first_name']} 
//     {$record['last_name']}, Age: 
//     {$record['age']}, Department: 
//     {$record['dept']}<br>";
// }


// EXERCISE ONE

// $sql = "SELECT * FROM portal WHERE age > 18";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo $row["name"] , $row["phone"] ,  $row["email"] ,  $row["age"];
//     }
// } else {
//     echo "No records found";
// }


// EXERCISE TWO

// $sql = "SELECT VERSION() AS mysql_version, USER() AS current_user, CURRENT_DATE() AS current_date";
// $result = $conn->query($sql);




// EXERCISE THREE
// MAX();
// MAX() function returns maximum value in a set of values. 
// $sql = "SELECT  ITEM_ID, ITEM, PRICE FROM ITEM WHERE price=(SELECT MAX(price) FROM ITEM)"; 



// EXERCISE FOUR

// $sql = "CREATE USER 'alviibrahim123@gmail.com' IDENTIFIED BY 'password'";


// EXERCISE FIVE
// $sql = "mysql> SELECT name, department, age FROM students -> WHERE department = 'CS' OR department = 'IT'";

// EXERCISE FIVE

    // ORDER BY clause to display data in an ordered way.
    // SELECT * FROM table_name ORDER BY 'name(s)'
    // SELECT * FROM students-> ORDER BY age DESC;

// EXERCISE SEVEN



    // mysql> SELECT * FROM students -> WHERE name REGEXP '^m';

   // SELECT * FROM portal WHERE email LIKE 's%';



// EXERCISE NINE

// mysql> SELECT name, birth, dept_name, dept_block -> FROM students -> JOIN departments using(dept_id);








?>