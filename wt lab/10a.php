<?php
    date_default_timezone_set('Asia/Calcutta');
    $intwo = 60*60*24*60 + time();
    setcookie('lastvisit',date('Y-m-d H:i:s'),$intwo);
    if(isset($_COOKIE['lastvisit'])){
       $visit = $_COOKIE['lastvisit'];
       echo "Last Visited On".$visit;
    }else{
       echo "You've got some stale cookies";
    }
?>