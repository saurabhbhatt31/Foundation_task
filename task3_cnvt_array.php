<?php
namespace strmagic;
    class StringMagic
    {
        function stringToArray(string $str): array
        {
            $cnvt_str = str_split($str);
            return $cnvt_str;
        } 
    }
?>
