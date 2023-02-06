<?php
    ini_set('display_errors',1);
    ini_set('display_startup_error',1);
    error_reporting(E_ALL);
    class SingleTon
    {
       private static $database = null;
       public static function dbConnect($database_name)
       {
         if(self::$database==null) {
         self::$database = new mysqli ('localhost','saurabh','hestabit@123',$database_name);
         echo "Now You're Connected With Database".'<br>';
         }
         return self::$database;
       }
       public function select($id,$f1, $f2, $tbname)
       {
         $con = self::dbConnect('practicetask');
         $sql= "SELECT `$id`,`$f1`, `$f2` FROM `$tbname`";
         $result=$con->query($sql);
         $response = $result->fetch_all();
         return $response;
       }
      //  Insertion (No duplicacy due to unique email)
       public function insert($tbname, $f1, $f2, $v1, $v2)
       {
         $con = self::dbConnect('practicetask');
         $sql = "INSERT INTO `$tbname` (`$f1`,`$f2`) VALUES('$v1','$v2')";
         $result=$con->query($sql);
         if($result) {
            echo "INSERTION SUCCESSFLL";
         } else {
            echo "INSERTION FAILED DUE TO SOME REASONS".'<br>';
         }
       }
      //  Deletion
       public function delete($tbname,$id)
       {
         $con = self::dbConnect('practicetask');
         $sql= "DELETE FROM `$tbname` WHERE `id`='$id'";
         $result=$con->query($sql);
         if($result) {
            echo "ROW DELETED";
         } else {
            echo "ROW DELETION FAILED DUE TO SOME REASONS".'<br>';
         }
       }
      //  UPDATION
       public function update($tbname, $f1, $v1, $id)
       {
         $con = self::dbConnect('practicetask');
         $sql = "UPDATE `$tbname` SET `$f1` ='$v1' WHERE `id`='$id'";
         $result=$con->query($sql);
         if($result) {
            echo "ROW UPDATED SUCCESSFULLY..".'<br>';
         } else {
            echo "ROW UPDATION FAILED DUE TO SOME REASONS".'<br>';
         }
       }
    }

    $obj = new SingleTon;
    // $data = $obj->select('id','name','email','users1');
    // echo "<pre>";
    // // print_r($data);
    $obj->insert('users1','name','email','TEST1','test45@gmail.com');
    $data = $obj->select('id','name','email','users1');
    echo "<pre>";
    print_r($data);
    // $obj->update('users1','name','TEST8','17');
    // $data = $obj->select('id','name','email','users1');
    // echo "<pre>";
    // print_r($data);
    // echo "<pre>";
    // print_r($data);
    // $obj->delete('users1','44');
    $data = $obj->select('id','name','email','users1');
    echo "<pre>";
    print_r($data);   
?>
