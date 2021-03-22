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
    <!-- navigation import -->
           <?php include_once ("Modules/Navmod_client.php");?>

    <!-- Background Image -->
        <div class="bg pimg"></div>

    <!-- main container -->
        <div class="container">
            <div class="topContainer flex">
                <div class="productCard">
                    <a href="Product.php"><img class="prodimg" src="Images/PlaceHolder.png" alt="content image"></a>
                    Lorem Ipsum         <hr>
                    <div class="proddesc"> Lorem</div>         
                </div>
                <div class="productCard">
                    <a href="Product.php"><img class="prodimg" src="Images/PlaceHolder.png" alt="content image"></a>
                    Lorem Ipsum    <hr>
                    <div class="proddesc"> Lorem</div>           
                </div>
                <div class="productCard">
                    <a href="Product.php"><img class="prodimg" src="Images/PlaceHolder.png" alt="content image"></a>
                    Lorem Ipsum         <hr>       
                    <div class="proddesc"> Lorem</div>  
                </div>
            </div>

            <div class="lowerContainer flex">
                <div class="productCard">
                    <a href="Product.php"><img class="prodimg" src="Images/PlaceHolder.png" alt="content image"></a>
                    Lorem Ipsum                <hr>
                    <div class="proddesc"> Lorem</div>  
                </div>
                <div class="productCard">
                    <a href="Product.php"><img class="prodimg" src="Images/PlaceHolder.png" alt="content image"></a>
                    Lorem Ipsum              <hr>
                    <div class="proddesc"> Lorem</div>    
                </div>
                <div class="productCard">
                    <a href="Product.php"><img class="prodimg" src="Images/PlaceHolder.png" alt="content image"></a>
                    Lorem Ipsum                <hr>
                    <div class="proddesc"> Lorem</div>  
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>