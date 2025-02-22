<?php
function factorial($n) {
    if ($n <= 1) return 1;
    else return $n * factorial($n - 1);
}

$num = 5; // You can change this number as needed

$start_time = microtime(true);
$result = factorial($num);
$end_time = microtime(true);

$runtime = $end_time - $start_time;
echo "Factorial of $num is $result\n";
echo "Runtime: " . ($runtime * 1000000) . " microseconds\n";
?>
