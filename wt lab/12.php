<?php
  
   if(isset($_POST['name']) && isset($_POST['usn'])){
         $name=$_POST['name'];
         $usn=$_POST['usn'];
         echo "Successful"." ".$name." ".$usn;
   }else{
         echo "Enter first name and last name";
   }
?>