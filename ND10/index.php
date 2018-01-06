<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid darkblue;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
</head>
<body>
<?php


?>

<table>
    <thead>
    <tr>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Vidurkis</th>
    </tr>
    </thead>
        <tbody>
        <?php
            include 'class.php';
            include 'array.php';
            mokinys($mokiniai);
        ?>
    </tbody>
</table>

</body>
</html>