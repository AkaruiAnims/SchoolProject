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
                    <li><a href="Userpage.php" class="userIMG">User</a></li> <!--(replace with svg)-->
                    <li><a href="Cart.php" class="cartIMG">Cart</a></li> <!--(replace with svg)-->
                </ul>
        </div>
</header>
<!-- Bottom Bar -->
<nav class="bar"></nav>
