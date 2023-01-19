<?php
    require_once 'divide_trait.php';
    class Addition
    {
        public function add(int $first_num, int $second_num): int
        {
            $result = $first_num + $second_num;
            return $result;
        }
    }
    class HalfCal extends Addition
    {
        use DivideTrait;
        public function multiplicate(int $first_num, int $second_num): int
        {
            $result = $first_num*$second_num;
            return $result;
        }
    }
    $obj = new HalfCal();
    echo $obj->divideTrait(20,2);
    echo "<br>";
    echo $obj->add(20,30);
    echo "<br>";
    echo $obj->multiplicate(10,20);
?>