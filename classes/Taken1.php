<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 14/05/18
 * Time: 22:29
 */
require_once "DB.php";
class validatie extends DB
{

    public function check(){
        $titel  = $_POST["titel"];
        $inhoud = $_POST["inhoud"];
        $datum  = $_POST["datum"];

        if (isset($_POST['submit']) and $titel != "" and $inhoud != "" and $datum != ""){

            $connection = new mysqli("localhost","root","","blog");

            $sql = "INSERT INTO `blog`.`takenlijst` (`id`, `titel`, `inhoud`, `datum`)
            VALUES (NULL, '$titel', '$inhoud', '$datum');";

//            print_r($sql);
            if ($connection->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }

        }
    }

}

$vali = new validatie();

$vali->check();