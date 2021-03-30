<?php 
    @include_once "connection.php";
    @include_once "external.php";
?>

<header class="header">
    <!-- Navigation -->
        <div class="heading flex">
            <a href="Index.php" class="logo">Mall.</a>
                <form method="POST" action="Result.php" class="form">
                    <input type="input" name="search" class="input" placeholder="Search... ">
                </form>
                <ul>
                    <?php
                    if( isset($_SESSION['Logged_in'])){
                   echo "<li><a href="."Dashboard_client.php"." class="."userIMG"."><img src="."Images/17709522571553667195.svg"." class="."svg"."></a></li>";
                    }else{
                   echo "<li><a href="."Login.php"." class="."userIMG".">Login</a></li>";
                    }
                    ?>
                    <li><a href="Cart.php" class="cartIMG"><img src="Images/shopping-cart-outline-svgrepo-com.svg" class="svg"></a></li> <!--(replace with svg)-->
                </ul>
        </div>
</header>
<!-- Bottom Bar -->
<nav class="bar"></nav>
