<!DOCTYPE html>
<html>
<head>
    <title>Demo 1</title>
    <meta charset="UTF-8">
</head>
<body>
<?php

$servername = 'localhost';
$dbname = 'auto';
$username = 'auto';
$password = 'LabaiSlaptas123';

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die('Nepavyko prisjungti: ' . $conn->connect_error);
}

//Insert new record

/*
$sql = "INSERT INTO radars (id, date, number, distance, time)
VALUES ('?', '2017', 'CIACIA', '500', '150')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    //echo "New record has been sucessfully inserted!";
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Prepare and bind

/*$stmt = $conn->prepare("INSERT INTO radars (date, number, distance, time) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssdd", $date, $number, $distance, $time);*/

//Set parameter and execute

/*$date = "2016-05-15";
$number = "MMM999";
$distance = "1523";
$time = "155";
$stmt->execute();

$date = "2075-05-45";
$number = "MMM888";
$distance = "15896";
$time = "156";
$stmt->execute();

$date = "2099-15-78";
$number = "MMM777";
$distance = "78964";
$time = "MMM666";
$stmt->execute();

echo "New records created successfully";

$stmt->close();*/



//Select Data

$sql = "SELECT * FROM radars";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //Outputs data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td >" . "id: " . $row["id"] . "</td><td>" . " date: " . $row["date"] . "</td><td>" . " number: " . $row["number"] . "</td><td>" . " distance: " . $row["distance"] . "</td><td>" . " time: " . $row["time"] . "</td></tr>";
    }
} else {
    echo "0 results!";
}

$conn->close();

//Delete data

/*$sql = "DELETE FROM radars WHERE id=1";

if($conn->query($sql) === TRUE) {
    echo "Record deleted successfully!";
}else {
    echo "Error deleting record!" . $conn->error;
}
$conn->close();*/

//Update data

/*$sql = "UPDATE radars SET number = 'CIA851' WHERE id = 35";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully!";
}else {
    echo "Error updating record!". $conn->error;
}
$conn->close();*/

//SQL create table

/*$sql = "CREATE TABLE drivers (
driverID INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
name VARCHAR (20) NOT NULL ,
city VARCHAR (20) NOT NULL 
)";

if ($conn -> query($sql) === TRUE) {
    echo "Table created!";
}else {
    echo "Table creation failed!". $conn -> error;
}
$conn->close();*/



?>
</body>
</html>
