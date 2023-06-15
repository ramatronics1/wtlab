<?php
    $name=$_GET['name'];
    $greetings=array("Hello","How are you","Good morning","AAAAA");
    $greetingindex=array_rand($greetings);
    $msg=$greetings[$greetingindex];
    echo "$name $msg !!!!!!";
?>