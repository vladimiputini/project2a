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

            /*$conn = new Database("localhost","blog","root","");

            $conn->dbconnect();*/

            /*$connection = new mysqli("localhost","root","","blog");*/

            $sql = "INSERT INTO `blog`.`takenlijst` (`titel`, `inhoud`, `datum`, `id`)
            VALUES ('$titel', '$inhoud', NULL, NULL);";

            if ($this->con->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $this->con->error;
            }

        }
    }

    public function read(){
        $sql = "SELECT * FROM blog";

        $connection = new mysqli("localhost","root","","blog");

        $result = $connection->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<div>"."id: ".$row["id"]." ".""."Titel:"." ". $row["titel"]." "."Inhoud:".$row["inhoud"]." "."Datum:".$row["datum"]."<br>"."</div>";
            }
        }
    }

    public function read2($table)
    {
        $connection = new mysqli("localhost","root","","blog");

        $sql = "SELECT * FROM " . $table;
        $array = array();
        $query = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
            $array[] = $row;
//            print_r($array);
        }
        return $array;
    }

    public function update(){

    }

    public function delete(){

    }
}