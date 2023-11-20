<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Listing</title>
</head>

<body>

    <div class="container mt-5 text-center">
    <button type="button" class="btn btn-dark w-50"><a href="listing.php">Listing</a></button>
        <button type="button" class="btn btn-dark show w-50 mt-2"><a href="index.php">Create</a></button>
    </div>

    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Age</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "task";

            // Create a Database Connection
            $con = mysqli_connect($server, $username, $password, $database);

            if (!$con) {
                die("Connection to the database failed due to" . mysqli_connect_error());
            }

            $query = "SELECT * FROM travel";
            $result = mysqli_query($con, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td>" . $row['dt'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='6'>No data found</td>";
                    echo "</tr>";
                }
            }

            // Close the connection
            mysqli_close($con);
            ?>
        </tbody>
    </table>

</body>

</html>
