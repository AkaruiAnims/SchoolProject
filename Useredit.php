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
            <!-- User Edit-->
            <div class="Admin main container">
                 <form Method="POST">
                         <table cellspacing="35" class="table" style="min-height:425px;">
                         <tr style="max-width:90vw;overflow-x:scroll;">
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
                                    if (isset($_POST['search']) && $_POST['search'] == "New" || isset($_POST['Edit'])){
                                        echo "
                                        <tr>
                                        <td><lable>Email: </lable></td>
                                        <td><input type="."input"." name="."Email"." required="."true"." class="."form input maxWidth"."></td>
                                        </tr>
                                        <tr>
                                        <td><lable>Username: </lable></td>
                                        <td><input type="."input"." name="."Username"." required="."true"." class="."form input maxWidth"."></td>
                                        </tr>
                                        <tr>
                                        <td><lable>Password: </lable></td>
                                        <td><input type="."input"." name="."Password"." required="."true"." class="."form input maxWidth"."></td>
                                        </tr>
                                        <tr>
                                        <td><lable>Rank: </lable></td>
                                        <td><input type="."input"." name="."Rank"." required="."false"." class="."form input maxWidth"." value="."Admin"."></td>
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
                           <button type="submit" name="Delete" value="Delete" class="button" style="border:1px solid black;">Delete</button> 
                           <input type="submit" name="Add" value="Add" class="button" style="border:1px solid black;">                           
                           <input type="submit" name="Edit" value="Edit" class="button" style="border:1px solid black;">
                        </div>
                    </form>  
            </div>
            <?php 
                if(isset($_POST['Delete']) && isset($_POST['Product'])){
                    $query = CRUD('Delete','users','username = "'.$_POST['Product'].'"');
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                }
                if(isset($_POST['Username']) && isset($_POST['Add'])){
                    $query = CRUD('Create','users (ID, username, password, rank, email)','("'.$_POST['ID'].'","'.$_POST['Username'].'","'.$_POST['Password'].'","'.$_POST['Rank'].'","'.$_POST['Email'].'")');
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                }
                if(isset($_POST['Username']) && isset($_POST['Edit'])){
                    $query = CRUD('Update','users','username = "'.$_POST['Username'].'", password = "'.$_POST['Password'].'", rank = "'.$_POST['Rank'].'", email = "'.$_POST['Email'].'" WHERE email = "'.$_POST['Email'].'"');
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                }
            ?>
            </div>
        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>