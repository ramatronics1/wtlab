<?php
function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}

// Check if three command-line arguments are provided
if (count($argv) != 4) {
    echo "Please provide three numbers as command-line arguments.\n";
    exit(1);
}

// Extract the numbers from command-line arguments
$num1 = intval($argv[1]);
$num2 = intval($argv[2]);
$num3 = intval($argv[3]);

// Call the function to find the largest number
$largest = findLargest($num1, $num2, $num3);

// Display the result
echo "The largest number is: " . $largest . "\n";
?>
