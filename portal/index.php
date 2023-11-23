<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "customerportal";

$con = mysqli_connect($server, $username, $password, $database) or die("Connection failed: " . mysqli_connect_error());

session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM portal WHERE email ='$email' AND password='$password'";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['id'] = $row['id'];

        header("location: main.php");
        exit;
    } else {
        $error = "Invalid email or password";
    }
};

mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Main Menu</title>
</head>

<body>
    <?php if (isset($error)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php } ?>

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

        <button type="submit" class="btn btn-primary w-100">LOGIN</button>
   
    <div class="container mt-5 text-center">
        <button type="button" class="btn btn-dark w-50"><a href="create.php">Create New Account</a></button>
    </div>
    </form>
    <script src="index.js"></script>
</body>

</html>
