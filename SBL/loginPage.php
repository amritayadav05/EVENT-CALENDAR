<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: calendar.php");
    }
?>
<?php
    $login = false;
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        // echo $password;
        $sql = "select * from signup where username = '$username'or email = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($row){  
            // echo $count;

            if(password_verify($password, $row["password"])){
                $login=true;
                session_start();

                $sql = "select username from signup where username = '$username'or email = '$username'";     
                $r = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);  

                $_SESSION['username']= $r['username'];
                $_SESSION['loggedin'] = true;
                header("Location: calendar.php");
            }
        }  
        else{  
            echo  '<script>
                        
                        alert("Login failed. Invalid username or password!!")
                        window.location.href = "calendar.php";
                    </script>';
        }     
    }
    ?>
    <?php 
    include("connection.php");

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginPage.css">
</head>
<body style="background-color:#b38add;">
    <?php include "navbar.php"; ?>

  <div id="form">
  <h1 style="color:white" id="heading">LOGIN</h1><br>
  <form style="color:white" name="form" action="loginPage.php" method="POST">
      <label>Enter Username/email: </label>
      <input type="text" id="user" name="user" required=""><br><br>
      <label>Enter Password: </label>
      <input type="password" id="pass" name="pass" required=""><br><br>
      <input style="color:white" type="submit" id="submit" value="Login" name="submit"/>
  </form>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>