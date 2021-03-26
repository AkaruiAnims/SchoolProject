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
           <div class="loginImg">
               <a href="Index.php" class="loginText">Mall.</a>
           </div>
            
           <div class="loginForm">
                <form method="POST">
                    <input type="input" class="input" placeholder="username..." name="username" required="true"><br>
                    <input type="password" class="input" placeholder="password..." name="password" required="true"><br>
                    <input type="submit" class="button submit" value="Login" name="submitBtnLogin">
                </form>
                <a href="Register.php" class="bottomRight">Register?</a>
           </div>

           <!-- php login code -->
           <?php

        if (isset($_POST['submitBtnLogin'])) {

        $username = isset($_POST['username']) ? trim($_POST['username']) : null;
        $password = isset($_POST['password']) ? trim($_POST['password']) : null;

        // debugging
        // echo $username;
        // echo $password;

        $sql = "SELECT ID, Username, Password, Rank FROM users WHERE Username = :username";
        $stmt = $connection->prepare($sql);

        //bind valuessss
        $stmt->bindparam(':username', $username);

        //execute
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // debugging
        // echo $user['Username']."<br>";
        // echo $user['Password']."<br>";

        //if $row is False
        if (!isset($user['ID'])){
        die('incorrect username or password combination');
        }

        //If $Password is TRUE, the login has been successful.
        if($password == $user['Password']){ //Compare the passwords.

        $_SESSION['Username'] = $user['Username']; 
        $_SESSION['Password'] = $user['Password'];
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['Rank'] = $user['Rank'];
        $_SESSION['Logged_in'] = time();

        if($user['Rank'] == "User"){
        header('Location: Index.php');
        exit;
        }elseif ($user['Rank'] == "Admin") {
            header('Location: Dashboard_staff.php');
        };

        }else {
        // if password was false or passwords didn't match.
        die('Incorrect username / password combination!');
        }
        };
    ?>
    </body>
</html>