<?php
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "customerportal";

            
            // Create a Database Connection
            $con = mysqli_connect($server, $username, $password, $database);



            $stmt = $con->prepare("SELECT * FROM portal WHERE ID ={$_REQUEST['id']}");


            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

        if (isset($_REQUEST['name'])){

        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $phone = $_REQUEST['phone'];
        $age = $_REQUEST['age'];

 

       
        $sql = "UPDATE portal SET name='$name', email='$email' , password='$password', phone='$phone' , age='$age' WHERE ID ={$_REQUEST['id']}";
       
 

        
        if ($con->query($sql) === TRUE) {
          echo "Record Updated Successfully";
          header("location: index.php");
        } else {
          echo "Error" . $con->error;
        }
        

  }
        $con->close();
         ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post" class="container mt-5" id="one" name="myForm" enctype="multipart/form-data">
    <h4 class="text-center mb-4">UPDATE YOUR PROFILE</h4>
<?php

?>
    <div class="form-group">
        <input type="text" name="name" id="name" placeholder="Enter Your Name" class="w-100"
            pattern="^[A-Za-z]+[A-Za-z ]*$" maxlength="20" value="<?php echo $row['name']?>" required>
    </div>

    <div class="form-group">
        <input type="email" name="email" id="email" placeholder="Enter Your Email" class="w-100" maxlength="20"
        value="<?php echo $row['email']?>" required>
    </div>

    <div class="form-group">
        <input type="password" name="password" id="password" placeholder="Enter Your Password" class="w-100"
        value="<?php echo $row['password']?>"   maxlength="20" required>
    </div>

    <div class="form-group">
        <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone" class="w-100"
        value="<?php echo $row['phone']?>"   maxlength="12" required>
    </div>

    <div class="form-group">
        <input type="text" name="age" id="age" placeholder="Enter Your Age" class="w-100" maxlength="2" 
        value="<?php echo $row['age']?>" required>
    </div>




    <button type="submit" name="name" class="btn btn-primary w-100">UPDATE</button>
    <button type="submit" name="create" class="btn w-100 mt-3"><a href="dashboard.php"
            class="btn btn-primary w-100 ">BACK</a></button>
</form>
    <script src="index.js"></script>
</body>










