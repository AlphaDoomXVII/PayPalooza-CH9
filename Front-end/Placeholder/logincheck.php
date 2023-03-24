<?php
session_start();
if(isset($_SESSION['loggedin'] )=== false){
	header("location:../placeholder/index.php");
}
?>