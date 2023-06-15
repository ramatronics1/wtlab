<?php
echo "<h1>Refresh Page</h1>";
$file='9b.txt';
$c=file_get_contents($file);
file_put_contents($file,$c+1);
echo "Count:$c";
?>