<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "customerportal";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to the database failed: " . mysqli_connect_error());
}

if (isset($_POST['create'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

$sql = "INSERT INTO `login` (`email`, `password`) 
VALUES ('$email', '$password')";

if ($con->query($sql) === true) {
    echo "<p class='text-center text-danger mt-2'>Successful</p>";
    header("Location: index.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Main Menu</title>
</head>

<body>

    <form action="" method="post" class="container mt-5" id="one" name="myForm">
        <h4 class="text-center mb-4">TECHIBITS LOGIN PORTAL</h4>
        <h5 class="text-center mb-4"></h5>

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Email" class="w-100" required>
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Password" class="w-100" 
            required>
        </div>

        <button type="submit" name="create" class="btn btn-primary w-100">LOGIN</button>
   
    <div class="container mt-5 text-center">
        <button type="button" class="btn btn-dark w-50"><a href="create.php">Create New Account</a></button>
    </div>
    </form>
    <script src="index.js"></script>
</body>

</html>


