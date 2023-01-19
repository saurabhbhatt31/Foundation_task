<?php
    class HalfCal
    {
        function add(int $first_num, int $second_num): int
        {
           $result = $first_num + $second_num;
           return $result; 
        }
        function sub(int $first_num, int $second_num): int
        {
            $result = $first_num - $second_num;
            return $result;
        }
    }
    $obj = new Halfcal();
    echo $obj->add(20,30);
    echo "<br>";
    echo $obj->sub(30,10);
?>