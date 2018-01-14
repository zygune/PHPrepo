<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyQuery</title>
    <style>
        table, th, td {
            width: 50%;
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        table {
            margin: 0 auto;
            margin-top: 30px;
        }
        input {
            border: 2px solid black;
            border-radius: 10px;
            padding: 5px
        }

    </style>
</head>
<body>
<center>
<form method="POST" action="">
    <!--<input type="number" placeholder="Write id to delete/update" name="id" >
    <input type="submit"  value="DELETE">-->
    <input name="id" type="number" placeholder="just id to delete row">
    <input name="date" type="date" placeholder="date">
    <input name="number" type="text" placeholder="number">
    <input name="distance" type="number" placeholder="distance">
    <input name="time" type="number" placeholder="time">
    <input name="submit" type="submit" value="insert/update/delete">
</form>
</center>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>date</th>
            <th>number</th>
            <th>distance</th>
            <th>time</th>
        </tr>
    </thead>
    <tbody>
        <?php include_once "SelectData.php";?>
    </tbody>
</table>
<?php
require_once "functions.php";

//sql to update data
if (!empty($_REQUEST['id']) && !empty($_REQUEST['date']) && !empty($_REQUEST['number']) && !empty($_REQUEST['distance']) && !empty($_REQUEST['time'])) {
    $sql = $conn->prepare("UPDATE radars SET date = ?, number = ?, distance = ?, time = ? WHERE id = ?");
    $sql->bind_param("ssddi", $_REQUEST['date'], $_REQUEST['number'], $_REQUEST['distance'], $_REQUEST['time'], $_REQUEST['id']);
    $sql->execute();

// sql to insert new data
}elseif (!empty($_REQUEST['date']) && !empty($_REQUEST['number']) && !empty($_REQUEST['distance']) && !empty($_REQUEST['time'])) {
    $sql = $conn->prepare("INSERT INTO radars(date, number, distance, time) VALUE (?, ?, ?, ?)");
    $sql->bind_param("ssdd", $_REQUEST['date'], $_REQUEST['number'], $_REQUEST['distance'], $_REQUEST['time'] );
    $sql->execute();

// sql to delete a record
}elseif (!empty($_REQUEST['id'])) {
    $sql = $conn->prepare("DELETE FROM radars WHERE id = ?");
    $sql->bind_param("i", $_REQUEST['id']);
    $sql->execute();
}






$conn->close();

?>

</body>
</html>