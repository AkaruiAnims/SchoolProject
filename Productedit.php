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
        <!-- navigation -->
           <?php include_once ("Modules/Navmod_admin.php");?>
            <!-- Product Edit-->
            <div class="midContainer main" style="margin-top:50px; min-height:550px;">
                <form Method="POST">
                         <table cellspacing="35" class="table" style="min-height:425px;">
                         <tr style="max-width:100vw;overflow-x:scroll;">
                            <?php
                                try{
                                //trying to avoid exceptions on the page
                                if (isset ($_POST['search'])){
                                    if(isset($_POST['category'])){
                                        $query = "SELECT * FROM products WHERE product_name = :product_name AND product_category = :product_category";
                                        $stmt = $connection->prepare($query);
                                        $stmt->execute(array(':product_name' => $_POST['search'],':product_category' => $_POST['category']));
                                    }else{
                                        $query = "SELECT * FROM products WHERE product_name = :product_name";
                                        $stmt = $connection->prepare($query);
                                        $stmt->execute(array(':product_name' => $_POST['search']));
                                    }
                                    
                                    while($row = $stmt->fetch()){
                                        echo "<td>";echo productCard($row['product_name']);echo"</td>";
                                    }
                                    }
                                    if (isset($_POST['search']) && $_POST['search'] == "New"){
                                        echo "
                                        <tr>
                                        <td><lable>Product name: </lable></td>
                                        <td><input type="."input"." name="."Productname"." required="."true"." class="."form input maxWidth"."></td>
                                        </tr>
                                        <tr>
                                        <td><lable>Product category: </lable></td>
                                        <td><input type="."input"." name="."Productcategory"." required="."true"." class="."form input maxWidth"."></td>
                                        </tr>
                                        <tr>
                                        <td><lable>Product ID: </lable></td>
                                        <td><input type="."input"." name="."ProductID"." required="."false"." class="."form input maxWidth"."></td>
                                        </tr>
                                        <tr>
                                        <td><lable>Product price: </lable></td>
                                        <td><input type="."input"." name="."Productprice"." required="."false"." class="."form input maxWidth"." value="."0"."></td>
                                        </tr>
                                        ";
                                    }
                                } catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                                }
                            ?>
                            </tr>
                         </table>
                         <div class="prodReview review container">
                           <button type="submit" name="Delete" value="Delete" class="button" style="border:1px solid black;">Delete</button> <input type="submit" name="Add" value="Add" class="button" style="border:1px solid black;">
                        </div>
                    </form>  
            </div>
            <?php 
                if(isset($_POST['Delete']) && isset($_POST['Product'])){
                    $query = CRUD('Delete','products','product_name = "'.$_POST['Product'].'"');
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                }
                if(isset($_POST['Productname']) && isset($_POST['Add'])){
                    $query = CRUD('Create','products (ID, product_name, product_price, product_category)','("'.$_POST['ProductID'].'","'.$_POST['Productname'].'","'.$_POST['Productprice'].'","'.$_POST['Productcategory'].'")');
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                }
            ?>
        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>