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
            <!-- Category edit-->
            <div class="Admin main container" style=";overflow-x:scroll;">
               <form method="POST"> 
                  <table class="table">
                            <?php    
                            if(isset($_POST['search'])){
                            $query = "SELECT * FROM products WHERE product_category = ".'"'.$_POST['search'].'"';
                                        $stmt = $connection->prepare($query);
                                        $stmt->execute();
                                while($row = $stmt->fetch()){
                                    echo "<tr><td class="."cartProd container "."><img src="."Images/PlaceHolder.png"." class="."cardButton prodimg".">"; echo $row['product_category']; echo "</td></tr>";
                                }                            
                            }
                            ?>             
                             <?php
                                try{
                                //trying to avoid exceptions on the page
                                if (isset ($_POST['search'])){                                      
                                        $query = "SELECT * FROM users WHERE username = ".'"'.$_POST['search'].'"';
                                        $stmt = $connection->prepare($query);
                                        $stmt->execute();
                                          
                                    while($row = $stmt->fetch()){
                                        echo "<td>";echo productCard($row['username']);echo"</td>";                                    
                                    }
                                }
                                    if (isset($_POST['Edit'])){
                                        echo "<h1>Update categorie van .. naar ..</h1>
                                        <tr>
                                        <td><lable>Oud Category: </lable></td>
                                        <td><input type="."input"." name="."Category1"." required="."true"." class="."form input maxWidth"."></td>
                                        </tr>
                                        <tr>
                                        <td><lable>Niew Category: </lable></td>
                                        <td><input type="."input"." name="."Category2"." required="."true"." class="."form input maxWidth"."></td>
                                        </tr>";
                                    }
                                } catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                                }
                            ?>               
                         </table>
                         <div class="prodReview review container">                      
                           <input type="submit" name="Edit" value="Edit" class="button" style="border:1px solid black;">
                        </div>
                    </form>
            </div>
            <?php
                if(isset($_POST['Category1']) && isset($_POST['Edit'])){
                    $query = CRUD('Update','products','product_category = "'.$_POST['Category2'].'" WHERE product_category = "'.$_POST['Category1'].'"');
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                }
            ?>
        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>