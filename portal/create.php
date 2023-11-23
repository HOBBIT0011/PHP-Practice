<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "customerportal";

$con = mysqli_connect($server, $username, $password, $database) or 
die("Connection failed: " . mysqli_connect_error());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);



    if(isset($_FILES['image'])){

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];


    if (!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }
     move_uploaded_file($file_tmp, "uploads/".date('YmdHis')."-".$file_name);}



    $sql = "INSERT INTO `portal` (`name`, `email`, `password` , `phone`, `age` , `gender` , `image`) 
    VALUES ('$name', '$email', '$password' , '$phone', '$age' , '$gender' , '$file_name')";

    if ($con->query($sql) === true) {
        echo "<p class='text-center text-danger mt-2'>Your ID Is Created Successfully.</p>";
        // header("refresh:0;url=index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    
}
error_reporting(0);

mysqli_close($con);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <title>SIGN UP</title>
</head>

<body>
<form action="" method="post" class="container mt-5" id="one" name="myForm" enctype="multipart/form-data">
        <h4 class="text-center mb-4">SIGN UP</h4>

        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" class="w-100"
                pattern="^[A-Za-z]+[A-Za-z ]*$" maxlength="20" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Enter Your Email" class="w-100" maxlength="20"
                required>
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Enter Your Password" class="w-100"
                maxlength="20" required>
        </div>

        <div class="form-group">
            <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100"
                pattern="[0-9]{12}" maxlength="12" required>
        </div>

        <div class="form-group">
            <input type="text" name="age" id="age" placeholder="Enter Your Age" class="w-100" maxlength="2" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
        </div>

        <div class="form-group">
            <input type="file" name="image" id="image">
        </div>

        <button type="submit" name="create" class="btn btn-primary w-100">SIGN UP</button>
        <button type="submit" name="create" class="btn w-100 mt-3"><a href="index.php"
                class="btn btn-primary w-100 ">Already Have An Account?</a></button>
    </form>
    <script src="index.js"></script>

</body>

</html>
