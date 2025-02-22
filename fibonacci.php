<?php
function fibonacci($n) {
    if ($n <= 1) return $n;
    else return fibonacci($n - 1) + fibonacci($n - 2);
}

$num = 10; // You can change this number as needed

$start_time = microtime(true);
$result = fibonacci($num);
$end_time = microtime(true);

$runtime = $end_time - $start_time;
echo "Fibonacci number at position $num is $result\n";
echo "Runtime: " . ($runtime * 1000000) . " microseconds\n";
?>
