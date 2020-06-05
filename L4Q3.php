<?php
if (!isset($_COOKIE['count'])) {
    $cookie = 1;
    setcookie("count", $cookie);
} else {
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
}


switch ($cookie){
    case 5:
        echo "A Special Message because this is the 5th time you are visiting!";
        break;
    case 10:
        echo "A Special Message because this is the 10th time you are visiting!";
        break;
    case 15:
        echo "A Special Message because this is the 15th time you are visiting!";
        break;
    case 20:
        echo "Cookie reset.".PHP_EOL;
        $cookie = 1;
        setcookie("count", $cookie);
    default:
        echo "You have visited this page $cookie times";
}