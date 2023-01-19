<?php
    require_once 'cnvt_array.php';
    require_once 'cnvt_string.php';
    $teststr = "SAURABH BHATT";
    $obj = new strmagic\StringMagic();
    $obj->stringToArray($teststr);
    echo "<br>";
    $objn = new StringMagic();
    $objn->stringReverse($teststr);
?>
