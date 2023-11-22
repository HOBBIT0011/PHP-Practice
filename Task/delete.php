<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<script>
    alert("Data Deleted Successfully");
    window.location = 'http://localhost/PHP-Practice/Task/index.php';
</script>

<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "task";

// Create a Database Connection
$con = mysqli_connect($server, $username, $password, $database);

if ($con && isset($_REQUEST['id'])) {
    $id = mysqli_real_escape_string($con, $_REQUEST['id']);
    $result = mysqli_query($con, "DELETE FROM travel WHERE id = $id");

    echo ($result) ? "Record deleted successfully" : "Error deleting record: " . mysqli_error($con);
} else {
    echo "Connection failed or ID not provided for deletion";
}
mysqli_close($con);
?>


