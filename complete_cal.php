<?php
    class Halfcal
    {
       function addition(int $first_num, int $second_num): int
        {
           $result = $first_num + $second_num;
           return $result; 
        }
        public function substract(int $first_num, int $second_num): int
        {
           $result = $first_num - $second_num;
           return $result; 
        }
        public function multiplicate(int $first_num, int $second_num): int
        {
           $result = $first_num * $second_num;
           return $result; 
        }            
    }
    class Calculator extends Halfcal
    {
        public function divide(int $first_num, int $second_num): int
        {
           $result = $first_num / $second_num;
           return $result; 
        }
    }
    $obj = new Calculator();
    echo $obj->addition(30,10);
    echo "<br>";
    echo $obj->substract(30,10);
    echo "<br>";
    echo $obj->multiplicate(30,10);
    echo "<br>";
    echo $obj->divide(100,10);
?>