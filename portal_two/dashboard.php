

<?php 
session_start();

if(!isset($_SESSION["id"])){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>TITLE PAGE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">TECHIBITS</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Team</a>
            </li>
          </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <td><a href="update.php?id=<?php echo $_SESSION['id']; ?>" class="btn btn-success">Update</a></td>
        </li>
          <li class="nav-item">
            <td><a href="delete.php?id=<?php echo $_SESSION['id']; ?>" class="btn btn-danger">Delete</a></td>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
      </nav>
</body>
</html>


 