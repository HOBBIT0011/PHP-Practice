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
    $database = "task"

    // Create a Database Connection
    $con = mysqli_connect($server, $username, $password, $database)

    // sql to delete a record
    $sql = "DELETE FROM travel where id = {$_REQUEST['id']}"
    $con->close()
    ?>
