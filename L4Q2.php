<?php
if (!isset($_COOKIE['count'])) {
    $cookie = 1;
    setcookie("count", $cookie);
} else {
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
}
echo "You have visited this page $cookie times";
