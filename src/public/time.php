<?php
$date = new DateTime();
echo $date->modify('yesterday')->format('Y-m-d H:i:s');

echo '<br>';
$date = new DateTime();
echo $date->modify('1 seconds')->format('Y-m-d H:i:s');