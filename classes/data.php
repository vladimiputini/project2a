<?php

include "Taken.php";

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>Your Website</title>
    <link rel="stylesheet" href="" type="text/css" />
    <script type="text/javascript"></script>
</head>

<body>


</div>
</div>
</div>
<div class="col-md-3"></div>
</div>

</div>

<div class="container">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<table class="table table-bordered">
<tr>
<th>#</th>
<th>Titel</th>
<th>Inhoud</th>
    <th>Datum</th>
<th>&nbsp</th>
<th>&nbsp</th>
</tr>
<?php
$obj = new Taken;
$myrow = $obj->read2("takenlijst");
foreach ($myrow as $row) {
//breaking point
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["titel"]; ?></td>
    <td><b><?php echo $row["inhoud"]; ?></b></td>
    <td><?php echo $row["datum"]; ?></td>
    <td><a href="index.php?update=1&id=<?php echo $row["id"]; ?>" class="btn btn-info">Edit</a></td>
    <td><a href="action.php?delete=1&id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php
}

?>
</table>
</div>
</div>
</div>
</body>
