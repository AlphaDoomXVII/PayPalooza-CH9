<?php

    include("DB_connect.php");

    function guidv4($data = null) {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);
    
        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    
        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
    


    if(isset($_POST['submit'])){
        if(!empty($_POST['FirstName']) && !empty($_POST['LastName'])&& !empty($_POST['username']) && !empty($_POST['Email']) && !empty($_POST['password'])){
           
            $uuid = guidv4();
            $FirstName = $_POST['FirstName'] ; 
            $LastName = $_POST['LastName'] ; 
            $username = $_POST['username'] ; 
            $Email = $_POST['Email'] ; 
            $password=password_hash($_POST['password'], PASSWORD_DEFAULT);

            $stmt = $conn->prepare("SELECT UserName FROM users WHERE UserName = ?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "Username already exists. Please choose a different username.";
            } 
            else {
        
            $query = "INSERT INTO users(uuid, First_Name, Last_Name, username, Email, Password) VALUES (?,?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'ssssss', $uuid, $FirstName, $LastName, $username, $Email, $password);
            $run = mysqli_stmt_execute($stmt);

            if($run){
                header("location: ../Front-end/placeholder/index.php");
            }
            else{
                echo "form not submitted"; 
            }
            }
        }
        else{
            echo '<script  
            type="text/javascript">window.onload = function () { alert("All fields need to be filled."); } 
                </script>'; 
        }
    }
?>
