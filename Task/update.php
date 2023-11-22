<?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "task";

            // Create a Database Connection
            $con = mysqli_connect($server, $username, $password, $database);


            $stmt = $con->prepare("SELECT * FROM travel WHERE ID ={$_REQUEST['id']}");


            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();


       
            // Form submission code
       if (isset($_REQUEST['updatebtn'])) {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $age = $_REQUEST['age'];

            
            $sql = "UPDATE travel SET name='$name', email='$email' , phone='$phone' , age='$age' WHERE ID ={$_REQUEST['id']}";

            if ($con->query($sql) === TRUE) {
              echo "Record Updated Successfully";
            } else {
              echo "Error" . $con->error;
            }
            
            $con->close();
    } 


        ?>


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5 text-center">
        <button type="button" class="btn btn-dark w-50"><a href="listing.php">Listing</a></button>
        <button type="button" class="btn btn-dark show w-50 mt-2"><a href="index.php">Create</a></button>
    </div>

    <form action="" method="post" class="container mt-5" id="one" onsubmit="return validateForm()" name="myForm">
        <h4 class="text-center mb-4">UPDATE FORM</h4>

        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" class="w-100" maxlength="20"
            pattern="[A-Za-z\s]+"  value ="<?php echo $row['name']?>" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Enter Your Email" class="w-100"  value ="<?php echo $row['email']?>" required>
        </div>

        <div class="form-group">
            <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100" 
            maxlength="12" pattern="[0-9]{1,12}" value ="<?php echo $row['phone']?>" required>
        </div>

        <div class="form-group">
            <input type="text" name="age" id="age" placeholder="Enter Your Age" class="w-100" 
            maxlength="3" onkeypress="return isNumeric(event)" value ="<?php echo $row['age']?>" required>
        </div>

        <button type="submit" name="updatebtn" class="btn btn-primary w-100">Update</button>
    </form>
    <script src="index.js"></script>
</body>


