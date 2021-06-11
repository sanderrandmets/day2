<pre>
<?php
$nums = array();

$myfile = fopen("day2.txt", "r");
while (($lines = fgets($myfile)) !== false) {
    array_push($nums, $lines);
}
//var_dump($nums);
foreach ($nums as $num1) {
    foreach ($nums as $num2) {
        foreach ($nums as $num3) {
            //var_dump($num1 + $num2 + $num3);
            if ((intval($num1) + intval($num2) + intval($num3)) == 2020) {
                var_dump($num1 * $num2 * $num3);
            }
        }
    }
}
//print_r($sum);
