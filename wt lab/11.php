<?php
  
   if(isset($_GET['firstName']) && isset($_GET['lastName'])){
         $firstName=$_GET['firstName'];
         $lastName=$_GET['lastName'];
         echo "Welcome"." ".$firstName." ".$lastName;
   }else{
         echo "Enter first name and last name";
   }
?>