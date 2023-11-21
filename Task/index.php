<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "task";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to the database failed due to" . mysqli_connect_error());
}

if (isset($_POST['create'])) {
    // Form submission code
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    $sql = "INSERT INTO `travel` (`name`, `email`, `phone`, `age`) 
            VALUES ('$name', '$email', '$phone', '$age')";

    if ($con->query($sql) == true) {
        echo "<p class='text-center text-danger mt-2'>Your form is submitted successfully.</p>";
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>

    <title>Form</title>
</head>

<body>

    <div class="container mt-5 text-center">
        <button type="button" class="btn btn-dark w-50"><a href="listing.php">Listing</a></button>
        <button type="button" class="btn btn-dark show w-50 mt-2"><a href="index.php">Create</a></button>
    </div>

    <form action="" method="post" class="container mt-5" id="one" onsubmit="return validateForm()" name="myForm">
        <h4 class="text-center mb-4">LOGIN PANNEL</h4>

        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" class="w-100" maxlength="20"
            pattern="[A-Za-z\s]+" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Enter Your Email" class="w-100" required>
        </div>

        <div class="form-group">
            <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" 
            maxlength="12" pattern="[0-9]{1,12}" required>
        </div>

        <div class="form-group">
            <input type="text" name="age" id="age" placeholder="Enter Your Age" class="w-100" 
            maxlength="3" onkeypress="return isNumeric(event)" required>
        </div>

        <button type="submit" name="create" class="btn btn-primary w-100">Submit</button>
    </form>
    <script src="index.js"></script>
</body>

</html>

<?php
mysqli_close($con);
?>
