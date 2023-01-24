<?php
    function set()
    {
        if (isset($_GET['text'])) {
            $name = $_GET['text'];
        } else {
            $name = NULL;
        }
        return $name;
    }
    $str = set();
    function getlength($str)
    {
        $str_length = strlen($str);
        return $str_length;
    }
    function showString($str)
    {
        echo "Final Converted String is :-".$str;
    }
    $length = getlength($str);
    function changeCase(int $length, string $str)
    {
        if ($length<2) {
            $cnvtstring = strtoupper($str);
            showString($cnvtstring);
        } elseif ($length>2 && strpos(trim($str),' ')==false) {
            $cnvtstring = strtolower($str);
            showString($cnvtstring);
        } elseif ($length>2 && strpos(trim($str),' ')==true) {
            $cnvtstring = ucfirst(strtolower($str));
            showString($cnvtstring); } else {
            $cnvtstring = "String is not understandable";
            showString($cnvtstring);
        }
    }
    changeCase($length, $str);
?>
