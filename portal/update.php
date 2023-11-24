<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "customerportal";

// Create a Database Connection
$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to the database failed due to" . mysqli_connect_error());
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    $stmt = $con->prepare("UPDATE portal SET name=?, email=?, phone=?, age=? WHERE ID=?");
    $stmt->bind_param("ssssi", $name, $email, $phone, $age, $id);

    if ($stmt->execute()) {
        echo "Record Updated Successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

$con->close();
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post" class="container mt-5" id="one" name="myForm">
        <h4 class="text-center mb-4">UPDATE YOUR ACCOUNT INFORMATION</h4>

        <input type="hidden" name="id" value="1">

        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" class="w-100" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Enter Your Email" class="w-100" required>
        </div>

        <div class="form-group">
            <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" required>
        </div>

        <div class="form-group">
            <input type="text" name="age" id="age" placeholder="Enter Your Age" class="w-100" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
        </div>

        <div class="form-group">
            <a id="upload" href="#" onclick="browseFile();">Upload Image</a>
            <input type="file" id="fileInput" style="display: none" onchange="handleFileInputChange()">
        </div>

        <div class="d-flex justify-content-between">
            <button type="button" onclick="goBack()" class="btn btn-primary w-10">BACK</button>
            <button type="submit" name="update" class="btn btn-primary w-50">UPDATE</button>
        </div>
    </form>
    <script src="index.js"></script>

    <script>
        // Function to go back to the previous page
        function goBack() {
            window.history.back();
        }
    </script>
</body>
