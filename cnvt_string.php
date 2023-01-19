<?php
    class StringMagic
    {
        function stringReverse(string $str): string
        {
            $length = strlen($str);
            for($i=$length; $i>=0; $i--)
            {
                echo $str[$i];
            }
        }
    }
?>