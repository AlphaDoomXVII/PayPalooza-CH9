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
        <a href="../Transaction/transactions.php"><button class="balkBtn" id="Btn2" > <i class="fa-solid fa-money-bill-transfer fa-bounce"></i> Transacties </button></a>
        <a href="../Budget"><button class="balkBtn" id="Btn3" > <i class="fa-solid fa-money-bill fa-bounce"></i> Budget </button></a>
        <a href="../Categorie"><button class="balkBtn" id="Btn4" > <i class="fa-solid fa-clipboard fa-bounce"></i> Categorie </button></a>
    </div>
    <h1 id="welkom" >Welkom <?=$_SESSION['FirstName']?> <?=$_SESSION['LastName']?> </h1>

    <div id="budgetDash">
       <h1 id="budgetDashText">placeholder</h1>
    </div>

    <div id="uitgaveDMDash">
       <h1 id="uitgaveDMDashText">placeholder</h1>
    </div>

    <div id="uitgaveVMDash">
       <h1 id="uitgaveVMDashText">placeholder</h1>
    </div>

    <div id="transactiesDash">
    <table class="table">
                <thead>
                    <tr>
                        <th>Info</th>
                        <th>Price</th>
                        <th>Date</th>
                    </tr>
                </thead>

            <tbody>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "paypalooza";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if($conn->connect_error){
                        die("connection failed".$conn->connect_error);
                    }
                    echo"";

                    $sql = "SELECT * FROM transactions";
                    $result = $conn->query($sql);

                    if(!$result){
                        die("invalid query: " . $conn->error);
                    }

                    while($row = $result->fetch_assoc()){
                        echo"<tr>
                        <td>" . $row["Info"] . "</td>
                        <td>" . $row["Price"] . "</td>
                        <td>" . $row["Date"] . "</td>
                        
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>






    <script src="https://kit.fontawesome.com/31e6b31a4b.js" crossorigin="anonymous"></script>
    
    <footer class="footer-distributed">

    <div class="footer-right">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-github"></i></a>

    </div>

    <div class="footer-left">

    <p class="footer-links">
        <a class="link-1" href="#">Mede mogelijk gemaakt door: VISTA College</a>
    </p>

    <p>Paypalooza  &copy; 2023</p>
    </div>

</footer>
</body>
</html>