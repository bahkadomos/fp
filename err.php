<?php


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$ua = $_SERVER['HTTP_USER_AGENT'];
$n = time();

$es = "$ip $n $ua".PHP_EOL;

file_put_contents("fp_err_log.txt", $es, FILE_APPEND | LOCK_EX);


?>
