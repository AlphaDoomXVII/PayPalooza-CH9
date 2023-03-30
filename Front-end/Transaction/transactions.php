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

<div id="test">
    <form action="transback.php" method="post" enctype="multipart/form-data">

        <input type="text" name="Info" placeholder="Info" required="">

        <input type="int" name="price" placeholder="prijs" required="">

        <input type="int" name="description" placeholder="Bescrijving" required="">
                
        <button type="submit" name="submit" value="submit" class="button">ADD</button>
    </form>
</div>

<div id="list">
    <table class="table">
            <thead>
                <tr>
                    <th>Info</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>category</th>
                    <th>Beschrijving</th>
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
                    <td>" . $row["category"] . "</td>
                    <td>" . $row["discription"] . "</td>
                    
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</div>


</body>
</html>