<?php
$options = getopt("x:hy:");
$dots_x = isset($options['x']) && is_int($options['x']*1)  ? $options['x'] : 2;
$dots_y = isset($options['y']) && is_int($options['y']*1)  ? $options['y'] : 2;
$littleSum = 0;
for ($i = 1; $i < $dots_x; $i++) {
    $littleSum += $i;
}
$totalRectangles = 0;
for ($j = 1; $j < $dots_y; $j++) {
    $totalRectangles += $littleSum * $j;
}
print_r("\n Total rectangles-> $totalRectangles\n");
