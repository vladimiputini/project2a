<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 14/05/18
 * Time: 22:03
 */

class DB
{
    protected $servername;
    protected $dbname;
    protected $username;
    protected $password;


    public function __construct($servername,$dbname,$username,$password){
        $this->dbname       = $dbname;
        $this->servername   = $servername;
        $this->username     = $username;
        $this->password     = $password;
    }

    public function dbconnect(){
       $connection =  mysqli_connect("localhost","root","","blog");

        if ($connection->connect_errno){
            die("connection failed:". $connection->connect_error);
        }
//        else {
//            echo "connected";
//        }
    }

}


$conn = new DB("localhost","blog","root","");

$conn->dbconnect();