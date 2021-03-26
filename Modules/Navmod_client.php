<?php 
    @include_once "connection.php";
    @include_once "external.php";
?>

<header class="header">
    <!-- Navigation -->
        <div class="heading flex">
            <a href="Index.php" class="logo">Mall.</a>
                <form action="Result.php" class="form">
                    <input type="input" class="input" placeholder="Search... ">
                </form>
                <ul>
                    <?php
                    if( isset($_SESSION['Logged_in'])){
                   echo "<li><a href="."Dashboard_client.php"." class="."userIMG".">User</a></li> <!--(replace with svg)-->";
                    }else{
                   echo "<li><a href="."Login.php"." class="."userIMG".">Login</a></li> <!--(replace with svg)-->";
                    }
                    ?>
                    <li><a href="Cart.php" class="cartIMG">Cart</a></li> <!--(replace with svg)-->
                </ul>
        </div>
</header>
<!-- Bottom Bar -->
<nav class="bar"></nav>
