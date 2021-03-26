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


class CRUD {

  function crud($input,$p1,$p2,$p3){
   switch ($input) {
//users
     case $input == "createU" or $input == "CreateU":
       return 'INSERT INTO '.$p1.' VALUES '.$p2 ;
       break;

     case $input == "readU" or $input == "ReadU":
       return 'SELECT '.' '.$p1.' '.' FROM '.' '.$p2.' '.' WHERE Model_ID = '.' '."'$p3'"; 
       break;

     case $input == "UpdateU" or $input =="updateU":
       return 'UPDATE users SET Username= '."'$p1'".' , Password= '."'$p2'".' WHERE ID = '.$p3;
       break;

     case $input == "DeleteU" or $input == "deleteU":
       return 'DELETE FROM '.$p1.' WHERE '.$p2.' = '.$p3;
       break;

//Cars

       case $input == "createC" or $input == "CreateC":
       return 'INSERT INTO '.$p1.' VALUES '.$p2 ;
       break;

     case $input == "readC" or $input == "ReadC":
       return 'SELECT '.' '.$p1.' '.' FROM '.' '.$p2.' '.' WHERE CarBrand = '.' '."'$p3'"; 
       break;

     case $input == "UpdateC" or $input =="updateC":
       return 'UPDATE '.$p1.' SET '.$p2.' = '.$p3;
       break;

     case $input == "DeleteC" or $input == "deleteC":
       return 'DELETE FROM '.$p1.' WHERE '.$p2.' = '.$p3;
       break;
   }
   } 
  }
$crud = new CRUD();

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