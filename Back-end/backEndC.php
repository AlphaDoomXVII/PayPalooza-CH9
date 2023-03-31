<?php
require_once('DB_connect.php');

session_start();
if(isset($_POST['submit'])){
    if(!empty($_POST['Category'])){
            $uuid= $_SESSION['uuid'];
            $Category = $_POST['Category'];
            $query = "INSERT INTO categories(uuid, Category) VALUES ( ?, ?)";
            
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'ss', $uuid, $Category);
            $run = mysqli_stmt_execute($stmt);
            
            if($run){
                header("location: ../Front-end/Categorie/index.php");
            }
            
    }
}
?>