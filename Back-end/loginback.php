<?php
    include('DB_connect.php');

    function checkPost() {
        foreach($_POST as $key => $value) {
            $_POST[$key] = htmlentities(strip_tags($value));
        }
    }

    if (isset($_POST['submit'])) {
        checkPost();
        $username = $_POST['username'];
        $password= $_POST['password'];

        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);


        if($count == 1){
            $FirstName = $row['First_Name'];
            $LastName = $row['Last_Name'];
            $Email = $row['Email'];
            $stored_password = $row['Password'];
            if (password_verify($password, $stored_password)) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['FirstName']= $FirstName;
                $_SESSION['LastName'] = $LastName;
                $sql = "select * from users WHERE username = '$username'";
                $result = mysqli_query($conn, $sql,);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);
                $uuid = $row['uuid'];
                $_SESSION['uuid'] = $uuid;
                header("location:../Front-end/Dashboard/index.php");
            } 

            else {
                echo '<script  
                type="text/javascript">window.onload = function () { alert("Password or Username invalid"); } 
                    </script>'; 
            }
        } 
        else {
            echo '<script  
            type="text/javascript">window.onload = function () { alert("Password or Username invalid"); } 
                </script>'; 
            
        }
    }
?>