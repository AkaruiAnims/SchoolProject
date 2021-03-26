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
            <div class="user container main grid">
                <section class="spacing-1 img"></section><section class="spacing-1 text">

                    <!-- greeting function -->
                    <?php
                 _time(); echo "&nbsp;".$_SESSION["Username"]."</h2>"; 
                ?></section>
                <section class="spacing-1 side sidebar"> 

                    <!-- Logout button -->
                    <form method="POST">
                        <input type="submit" value="Log out" class="button logOut" name="Log_out">
                    </form>

                </section>
                <section class="spacing-1 main content">content</section>
            </div>
            <?php
                if(isset($_POST['Log_out'])){
                    session_unset();
                    header('Location: Login.php');
                }
            ?>
        <!-- Footer -->
        <?php include_once ("Modules/Footer.php");?>
    </body>
</html>