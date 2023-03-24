<?php
    include('DB_connenct.php');

    function checkPost() {
        foreach($_POST as $key => $value) {
            $_POST[$key] = htmlentities(strip_tags($value));
        }
    }

    if (isset($_POST['submit'])) {
        checkPost();
        $username = $_POST['username'];
        $password= $_POST['password'];

        $sql = "select * from login where username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $sql2 = "select * from transactions where New_Balance = '$balance'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
        $count2 = mysqli_num_rows($result2);

        if($count == 1){
            $FirstName = $row['FirstName'];
            $LastName = $row['LastName'];
            $Email = $row['Email'];
            $stored_password = $row['password'];
            if (password_verify($password, $stored_password)) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['uuid'] = $row['uuid'];
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['Email'] = $Email;
                $_SESSION['FirstName']= $FirstName;
                $_SESSION['LastName'] = $LastName;
                $_SESSION['balance'] = $balance;
                header("location:../Dashboard/index.php");
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