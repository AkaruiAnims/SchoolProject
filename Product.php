<?php 
    $Productname = $_POST['Product'] ?? $_POST['cart'];
    if(!isset($Productname)){
        header('Location: Index.php');
    }
?>
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
            <!-- content -->
            <div class="product container topContainer main">
             <div class="productButtons">
                 <form method="POST">
                    <button type="submit" name="cart" value="<?php echo $Productname; ?>" class="productSubmit submit button">Add to cart</button>
                 </form>
             </div>
                <img class="prodImg prodimg" src="Images/PlaceHolder.png"> 
                <p class="prodText">
                    <?php echo $Productname; ?>
                </p>
                <div class="review container">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                minima nesciunt dolorem!
                </div>
                <div class="prodReview review container">
                Review
                <div style="border:1px solid black; border-radius:5px; margin:5px;padding:5px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                    nihil, eveniet aliquid culpa officia aut! 
                </div>
                <div style="border:1px solid black; border-radius:5px; margin:5px;padding:5px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                    nihil, eveniet aliquid culpa officia aut! 
                </div>
                <div style="border:1px solid black; border-radius:5px; margin:5px;padding:5px;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                    nihil, eveniet aliquid culpa officia aut! 
                </div>
                </div>
            </div>
            <?php
                if(isset($_POST['cart'])){
                    if(!isset($_SESSION['Cart'])){
                        $_SESSION['Cart'] = array();
                    }else{
                        array_push($_SESSION['Cart'], $Productname);
                    }
                }
            ?>
        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>