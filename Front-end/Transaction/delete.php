<?php

          $id = $_GET["id"];

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "paypalooza";
          $conn = new mysqli($servername, $username, $password, $dbname);
          if($conn->connect_error){
          die("connection failed".$conn->connect_error);
          }
          echo"";

          $sql = "DELETE FROM transactions WHERE id = $id";
          $conn->query($sql);

          
          header("location: ./transactions.php");
          exit;
