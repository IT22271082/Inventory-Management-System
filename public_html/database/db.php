<?php


class Database
{
    private $con;

    public function connect(){
        include_once("constants.php");
        $this-> con= new Mysqli(HOST, USER, PASSWORD, DB);

        if($this-> con){
            echo "Connected";
                return $this-> con;
            }
                return "Database is not connected";

    }
}


//$db = new Database();
//$db-> connect();


?>