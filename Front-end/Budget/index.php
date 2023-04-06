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
        <a href="../Transaction/transactions.php"><button class="balkBtn" id="Btn2" > <i class="fa-solid fa-money-bill-transfer fa-bounce"></i> Transacties </button></a>
        <a href="../Budget"><button class="balkBtn" id="Btn3" > <i class="fa-solid fa-money-bill fa-bounce"></i> Budget </button></a>
        <a href="../Categorie"><button class="balkBtn" id="Btn4" > <i class="fa-solid fa-clipboard fa-bounce"></i> Categorie </button></a>
    </div>

    <div id="budgetMain">
        <h1 id="budgetMainText">€ <?=$_SESSION['Budget']?></h1>
    </div>







    <script src="https://kit.fontawesome.com/31e6b31a4b.js" crossorigin="anonymous"></script>

</body>
</html>