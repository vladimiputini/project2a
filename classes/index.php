<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 13/04/18
 * Time: 11:15
 */
require_once "DB.php";
//require_once "validatie.php";


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>BLOG</title>
</head>
<body>
<h1>Takenlijst</h1><br/>
<form class="form-inline"  action="validatie.php"  method="post">

    <div class="form-group">

        <label for="titel">Titel</label>
        <input type="text" id="titel" name="titel" class="form-control mx-sm-3" >

        <label for="inhoud">inhoud</label>
        <textarea type="text" id="inhoud" name="inhoud" class="form-control mx-sm-3"></textarea>

        <label for="datum">Datum</label>
        <input type="date" id="datum" name="datum" class="form-control mx-sm-3" >
    </div>

    <input type="submit" name="submit" value="Upload" class="btn btn-success">
</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>