<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>

    <link rel="stylesheet" href="style.css">
    

</head>
<body>

    <div id="balk"> <img src="../images/paypaloozaLogo.png" id="logo" >
        <button class="balkBtn" id="Btn1" > <i class="fa-solid fa-house-chimney fa-bounce"></i> Dashboard </button>
        <button class="balkBtn" id="Btn2" > <i class="fa-solid fa-money-bill-transfer fa-bounce"></i> Transacties </button>
        <button class="balkBtn" id="Btn3" > <i class="fa-solid fa-money-bill fa-bounce"></i> Budget </button>
        <button class="balkBtn" id="Btn4" > <i class="fa-solid fa-clipboard fa-bounce"></i> Categorie </button>
    </div>

    <script src="https://kit.fontawesome.com/31e6b31a4b.js" crossorigin="anonymous"></script>

<div>
    <form action="transback.php" method="post" enctype="multipart/form-data">

        <input type="text" name="Info" placeholder="Info" required="">

        <input type="int" name="price" placeholder="prijs" required="">

        <input type="int" name="description" placeholder="Bescrijving" required="">
                
        <button type="submit" name="submit" value="submit" class="button">ADD</button>
    </form>
</div>
    


</body>
</html>