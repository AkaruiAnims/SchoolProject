<!Doctype html>
<html>
    <head>
        <title>Mall.com</title>
        <link rel="stylesheet" href="templateStyle.css">
        <link rel="stylesheet" href="styleSheet.css">
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="Images/Mall_Logo.png" type="image/png">
    </head>
    <body>
        <!-- Navigation -->
           <?php include_once ("Modules/Navmod_client.php");?>
            
            <div class="container ">
                  <div class="midContainer">
                   <form class="overflowY " action="ordering.php">
                         <table class="table">
                            <?php    
                                $price = 0;           
                                if(isset($_SESSION['Cart'])){             
                                for($i = 0; $i < count($_SESSION['Cart']); $i++){
                                    $query = "SELECT product_price FROM products WHERE product_name = :product_name";
                                        $stmt = $connection->prepare($query);
                                        $stmt->execute(array(':product_name' => $_SESSION['Cart'][$i]));
                                        $row = $stmt->fetch();
                                    echo "<tr><td class="."cartProd container "."><img src="."Images/PlaceHolder.png"." class="."cardButton prodimg".">"; echo $_SESSION['Cart'][$i]; echo " | &#8364;".$row['product_price']."</td></tr>";
                                    $price = $price+$row['product_price'];
                                }
                            }else{
                                echo "<h1 style="."margin-top:250px;".">Je winkel wagen is leeg</h1>";
                            }
                            ?>
                         </table>                      
                </div>
            </div>
                <div class="review lowerContainer">
                    <button type="submit" name="cart" value="<?php echo $price; ?>" style="align-items: center;" class="productSubmit submit button">Bestel</button>
                </div>
            </form>  
           <!-- Footer -->
            <?php include_once ("Modules/Footer.php");?>
    </body>
</html>