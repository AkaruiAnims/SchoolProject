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

           <div class="Admin main container">
               <div class="containerTop flex">
                    <a href="Productedit.php" class="linkCard flex "><i>Product edit</i></a>
                    <a href="Categoryedit.php" class="linkCard flex "><i>Category edit</i></a>
               </div>
               <div class="containerLower flex">
                    <a href="Sessionmonitor.php" class="linkCard flex "><i>Sessions</i></a>
                    <a href="Useredit.php" class="linkCard flex "><i>Worker/Client edit</i></a>
               </div>
           </div>
        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>