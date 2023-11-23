<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "customerportal";

// Create a Database Connection
$con = mysqli_connect($server, $username, $password, $database);

// Check the connection
if (!$con) {
    die("Connection to the database failed due to" . mysqli_connect_error());
}

if (isset($_REQUEST['updatebtn'])) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $age = $_REQUEST['age'];

    // Prepare the update statement
    $stmt = $con->prepare("UPDATE portal SET name=?, email=?, phone=?, age=? WHERE ID=?");
    $stmt->bind_param("ssssi", $name, $email, $phone, $age, $id);

    // Execute the update
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
        <button type="submit" name="create" class="btn btn-primary w-10 ">BACK</button>
        <button type="submit" name="create" class="btn btn-primary w-50">UPDATE</button>
        </div>

    </form>
    <script src="index.js"></script>




</body>


