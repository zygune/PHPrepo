<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
         input {
             border: 1px solid black;
             padding: 6px;
             border-radius: 6%;
         }

    </style>
</head>
<body>
    <form method="post">
        <input name="id" type="number" placeholder="id">
        <input name="date" type="date" placeholder="date">
        <input name="number" type="text" placeholder="number">
        <input name="distance" type="number" placeholder="distance">
        <input name="time" type="number" placeholder="time">
        <input name="submit" type="submit">
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
    <?php
    include 'mySQL.php';
    ?>
    </tbody>

</table>


</body>
</html>