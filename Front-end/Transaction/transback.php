<?php
    include('DB_connect.php');


    session_start();
    if(isset($_POST['submit'])){
        if(!empty($_POST['Info'])&& !empty($_POST['price'])){
        
            $username = $_SESSION['username'];
            $sql = "select * from users where username = '$username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            $uuid = $row['uuid'];
            $Info = $_POST['Info'];
            $Price = $_POST['price'];
            


            $query = "INSERT INTO transactions(uuid, Info, Price) VALUES ( ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'sss', $uuid, $Info, $Price);
            $run = mysqli_stmt_execute($stmt);

            if($run){
                header("location: transactions.php");
            }
            else{
                echo "form not submitted"; 
            }
        }
        else{
            echo '<script  
            type="text/javascript">window.onload = function () { alert("All fields need to be filled."); } 
                </script>'; 
        }
    }
?>