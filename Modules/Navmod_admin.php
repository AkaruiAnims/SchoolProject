<?php 
    @include_once "connection.php";
    @include_once "external.php";
?>

<header class="header">
    <!-- Navigation -->
        <div class="heading flex">
            <a href="Dashboard_staff.php" class="logo">Mall.</a>
                <form action="Result.php" class="form">
                    <input type="input" class="input" placeholder="Search... ">
                </form>
                <ul>
                    <?php
                    if( isset($_SESSION['Logged_in'])){
                   echo "<li><a href="."Dashboard_client.php"." class="."userIMG"."><img src="."Images/17709522571553667195.svg"." class="."svg"."></a></li>";
                    }
                    ?>
                    </ul>
        </div>
</header>
<!-- Bottom Bar -->
<nav class="bar"></nav>
