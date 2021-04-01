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
            <!-- Sessions monitor-->
            <div class="Admin main container">
                <table class="table">
                            <?php    
                            $query = "SELECT * FROM users";
                                        $stmt = $connection->prepare($query);
                                        $stmt->execute();
                                        $row = $stmt->fetch();
                                $sessions = $row['total_sessions'];
                                echo "<tr><th>Total sessions: ".$sessions."</th></tr>";
                                for($i = 0; $i < $row['total_sessions']; $i++){
                                    echo "<tr><td class="."cartProd container "."><img src="."Images/PlaceHolder.png"." class="."cardButton prodimg".">"; echo $row['username'][$i]; echo "</td></tr>";
                                }                            
                            ?>
                         </table>     
            </div>
        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>