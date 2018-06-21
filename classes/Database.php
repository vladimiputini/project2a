<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 14/05/18
 * Time: 22:03
 */

class Database
{
    protected $servername;
    protected $dbname;
    protected $username;
    protected $password;

    public $con;

    public function __construct($servername,$dbname,$username,$password){
        $this->dbname       = $dbname;
        $this->servername   = $servername;
        $this->username     = $username;
        $this->password     = $password;
    }

    public function dbconnect(){
       $this->con =  mysqli_connect("localhost","root","","blog");

        if ($this->con->connect_errno){
            die("connection failed:". $this->con->connect_error);
        }
    }

}

//index
//$conn = new DB("localhost","blog","root","");
//
//$conn->dbconnect();