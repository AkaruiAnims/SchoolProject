<?php

    function product_card($input){
//Product Card Maker
        return "<div class="."productCard".">
                            <input type="."submit"." name="."Product"." value=".$input." class="."cardButton prodimg"." src="."Images/PlaceHolder.png"."> 
                            ".$input."         <hr>
                            <div class="."proddesc"."> Lorem</div>         
                        </div>";
    }

     function productCard($input){
//Product Card Maker
        return "<div class="."productCard".">
                            <input type="."checkbox"." name="."Product"." value=".$input." class="."cardButton prodimg"." src="."Images/PlaceHolder.png"."> 
                            ".$input."         <hr>
                            <div class="."proddesc"."> Lorem</div>         
                        </div>";
    }

     function CRUD($crud,$dbt,$args){
         
   switch ($crud) {
//Crud Functions
     case $crud == "Create" or $crud == "create":
       $query = 'INSERT INTO '.$dbt.' VALUES '.$args;
       return $query;       
       break;

     case $crud == "Read" or $crud == "read":
       $query = 'SELECT '.$args['0'].' FROM '.' '.$dbt.' '.$args; 
       return $query;       
       break;

     case $crud == "Update" or $crud =="update":
       $query = 'UPDATE '.$dbt.' SET '.$args;
       return $query;      
       break;

     case $crud == "Delete" or $crud == "delete":
       $query = 'DELETE FROM '.$dbt.' WHERE '.$args;
       return $query;       
   }
   } 
?>