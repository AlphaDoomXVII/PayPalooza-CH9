<?php
include('../Placeholder/logincheck.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>

    <link rel="stylesheet" href="style.css">
    

</head>
<body>

    <div id="balk"> <img src="../images/paypaloozaLogo.png" id="logo" >
        <a href="../Dashboard"><button class="balkBtn" id="Btn1" > <i class="fa-solid fa-house-chimney fa-bounce"></i> Dashboard </button></a>
        <a href="../Transacties"><button class="balkBtn" id="Btn2" > <i class="fa-solid fa-money-bill-transfer fa-bounce"></i> Transacties </button></a>
        <a href="../Budget"><button class="balkBtn" id="Btn3" > <i class="fa-solid fa-money-bill fa-bounce"></i> Budget </button></a>
        <a href="../Categorie"><button class="balkBtn" id="Btn4" > <i class="fa-solid fa-clipboard fa-bounce"></i> Categorie </button></a>
    </div>
    <h1 id="welkom" >Welkom <?=$_SESSION['FirstName']?> <?=$_SESSION['LastName']?> </h1>

    <div id="budgetDash" >
       <h1 id="budgetDashText" >[Placeholder]</h1>
    </div>





    <script src="https://kit.fontawesome.com/31e6b31a4b.js" crossorigin="anonymous"></script>

</body>
</html>