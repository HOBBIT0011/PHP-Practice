<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "customerportal";

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection to the database failed due to" . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM `login` WHERE id = ?";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();

    header("Location: http://localhost/PHP-Practice/portal/index.php");
    exit(); 
}

mysqli_close($con);
?>





<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script>
    alert("Data Deleted Successfully");
    window.location = 'http://localhost/PHP-Practice/portal/index.php';
</script>