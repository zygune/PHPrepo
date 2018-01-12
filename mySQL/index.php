<!<!doctype html>
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
        }
    </style>
</head>
<body>
<form method="POST" action="">
    <input type="text" placeholder="Write id to delete row!">
    <input name="delete" type="submit"  value="submit">
</form>
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

// sql to delete a record

if (isset($_GET['delete'])) {
    $sql = "DELETE FROM radars WHERE id = ". intval($_GET['delete']);
    $conn->query($sql);
}

?>

</body>
</html>