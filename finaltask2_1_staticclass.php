<?php
    interface MyInterface 
    {
        public static function dbconnect($dbname);
    }
    class SingleTon
    {
        private static $database=null;
        public static function dbconnect($dbname)
        {
            if(self::$database==null)
            {
                self::$database = new mysqli('localhost','saurabh','hestabit@123',$dbname);
                echo "You're Connected with your Databse.";
            }
            else 
            {
                echo "You're already Connected..";
            } 
            return self::$database;        
        }
    }
    $obj = SingleTon::dbconnect('practicetask');
?>
