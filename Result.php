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
           <?php include_once ("Modules/Navmod_client.php");?>
           
           <!-- page container -->
        <div class="container">

            <!-- categories -->
                <div class="sidebar">
                    <ul class="navbar">
                    <form method="POST">
                        <li><input type="radio" name="category" value="Groenten"> Groenten</li>
                        <li><input type="radio" name="category" value="Fruit"> Fruit</li>
                        <li><input type="radio" name="category" value="Vlees"> Vlees</li>
                        <li><input type="radio" name="category" value="Kip"> Kip</li>
                        <li><input type="radio" name="category" value="Eieren"> Eierener</li>
                        <li><input type="radio" name="category" value="Bakkerij"> Bakkerij</li>
                        <li><input type="radio" name="category" value="Verse_Kant_en_klaar_maaltijden"> Kant-en-klaarmaaltijden</li>
                        <li><input type="radio" name="category" value="Salades"> Salades</li>
                        <li><input type="radio" name="category" value="Frisdranken"> Frisdranken</li>
                        <li><input type="radio" name="category" value="Koffie"> Koffie</li>
                        <li><input type="radio" name="category" value="Thee"> Thee</li>
                        <li><input type="radio" name="category" value="Sappen"> Sappen</li>
                        <li><input type="radio" name="category" value="Ontbijtgraanen"> Ontbijtgraanen</li>
                        <li><input type="radio" name="category" value="Broodbeleg"> Broodbeleg</li>
                        <li><input type="radio" name="category" value="Tussendoor"> Tussendoor</li>
                        <li><input type="radio" name="category" value="Wijn"> Wijn</li>
                        <li><input type="radio" name="category" value="Bier"> Bier</li>
                        <li><input type="radio" name="category" value="Sterke_drank"> Sterke_drank</li>
                        <li><input type="radio" name="category" value="Aperitieven"> Aperitieven</li>
                        <li><input type="radio" name="category" value="Pasta"> Pasta</li>
                        <li><input type="radio" name="category" value="Rijst"> Rijst</li>
                        <li><input type="radio" name="category" value="Internationale_keuken"> Internationale_keuken</li>
                        <li><input type="radio" name="category" value="Soepen"> Soepen</li>
                        <li><input type="radio" name="category" value="Conserven"> Conserven</li>
                        <li><input type="radio" name="category" value="Sauzen"> Sauzen</li>
                        <li><input type="radio" name="category" value="Smaakmakers"> Smaakmakers</li>
                        <li><input type="radio" name="category" value="Snoep"> Snoep</li>
                        <li><input type="radio" name="category" value="Koek"> Koek</li>
                        <li><input type="radio" name="category" value="Chips"> Chips</li>
                        <li><input type="radio" name="category" value="Diepvries"> Diepvries</li>
                        <li><input type="radio" name="category" value="Drogisterij "> Drogisterij</li>
                        <li><input type="radio" name="category" value="Baby"> Baby</li>
                        <li><input type="radio" name="category" value="Bewuste_voeding "> Bewuste_voeding</li>
                        <li><input type="radio" name="category" value="Huishouden "> Huishouden</li>
                        <li><input type="radio" name="category" value="Huisdier "> Huisdier</li>
                        <li><input type="radio" name="category" value="Koken"> Koken</li>
                        <li><input type="radio" name="category" value="Tafelen"> Tafelen</li>
                        <li><input type="radio" name="category" value="Electrionica"> Electrionica</li>
                        <li><input type="radio" name="category" value="Kleding"> Kleding</li>
                        <li><input type="radio" name="category" value="Boeken"> Boeken</li>
                        <li><input type="radio" name="category" value="Speelgoed"> Speelgoed</li>
                     </form>
                    </ul>
                </div>

                <!-- products -->
                <div class="midContainer">
                <form Method="POST" action="Product.php">
                         <table cellspacing="35" class="table">
                         <tr>
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
                                        echo "<td>";echo product_card($row['product_name']);echo"</td>";
                                    }
                                    }
                                } catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                                }
                            ?>
                            </tr>
                         </table>
                    </form>  
                </div>
        </div>
        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>