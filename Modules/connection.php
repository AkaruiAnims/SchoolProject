<?php
// start the session
session_start();

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = 'project3';
  //connection
try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
  echo $e->getMessage();                         
}

function _time(){
    $time = date('H');
    if($time <= "12"){
        echo "<h2>Good Morning";
    } elseif($time >= "13" and $time <= "18" ){
      echo "<h2>Good Afternoon";
    } elseif($time >= "19" and $time <= "23" ){
      echo "<h2>Good Evening";
    }
}

?>