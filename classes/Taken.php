<?php
/**
 * Created by PhpStorm.
 * User: Local pc
 * Date: 8-6-2018
 * Time: 11:19
 */

require_once 'Database.php';

class Taken extends Database
{
    public $titel, $inhoud;

    public function __construct()
    {
        $this->titel = ' ';
        $this->inhoud = ' ';
    }

    public function create($titel, $inhoud){
        if ($titel != "" and $inhoud != ""){

            $conn = new Database("localhost","blog","root","");

            $conn->dbconnect();

            $connection = new mysqli("localhost","root","","blog");

            $sql = "INSERT INTO `blog`.`takenlijst` (`titel`, `inhoud`, `datum`, `id`)
            VALUES ('$titel', '$inhoud', NULL, NULL);";

            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }

        }
    }

    public function read(){

    }

    public function update(){

    }

    public function delete(){

    }
}