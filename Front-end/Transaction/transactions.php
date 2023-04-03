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
?>

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
        <a href="../Dashboard"><button class="balkBtn" id="Btn1" > <i class="fa-solid fa-house-chimney fa-bounce"></i> Dashboard </button></a>
        <a href="../Transaction/transactions.php"><button class="balkBtn" id="Btn2" > <i class="fa-solid fa-money-bill-transfer fa-bounce"></i> Transacties </button></a>
        <a href="../Budget"><button class="balkBtn" id="Btn3" > <i class="fa-solid fa-money-bill fa-bounce"></i> Budget </button></a>
        <a href="../Categorie"><button class="balkBtn" id="Btn4" > <i class="fa-solid fa-clipboard fa-bounce"></i> Categorie </button></a>
    </div>

    <div id="listInsert">
        <form action="../../Back-end/transback.php" method="post" enctype="multipart/form-data">

            <input type="text" name="Info" placeholder="Info" required="" id="listInfo">

            <input type="int" name="price" placeholder="Prijs" required="" id="listPrice">
            
            <select name="category" placeholder="Category" required="" id="listDrop">
                
                <option value="">Geen</option>

                <?php
                    $uuid = $_SESSION['uuid'];
                    $list=$conn->query("SELECT * FROM `categories` ORDER BY `categories`.`category` ASC ");
                    while($row_list=$list->fetch_assoc()):
                ?>
                <option value="<?= $row_list['category']; ?>"><?= $row_list['category'];?></option> 
                
                <?php endwhile; ?>
            </select>
                    
            <button type="submit" name="submit" value="submit" class="button" id="listBtn">ADD</button>
        </form>
    </div>

    <div id="list">
        <table class="table">
                <thead>
                    <tr>
                        <th>Info</th>
                        <th>Price</th>
                        <th id="tableDate">Date</th>
                        <th>Category</th>
                    </tr>
                </thead>
            <tbody>
                <?php

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
                        <td>" . $row["category"] . "</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

<script src="https://kit.fontawesome.com/31e6b31a4b.js" crossorigin="anonymous"></script>

</body>
</html>