<?php @include_once "Modules/connection.php"; ?>
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
            <div class="register">
                <div class="container flex">
                    <section class="top">
                        Logo
                    </section>

                    <section class="nav">
                        Nav
                    </section>

                    <section class="main">
                        <form action="Login.php">
                        Main
                    </section>

                    <section class="container">
                        <ul class="ul flex">
                            <li class="prev"><a href="Login.php" class="button buttonLeft">Back</a></li>
                            <li class="next"><input type="submit" value="Register" class="button buttonRight"></li>
                        </ul>
                        </form>
                    </section>
                </div>    
            </div>
            <?php @include_once "Modules/Footer.php" ?>
    </body>
</html>