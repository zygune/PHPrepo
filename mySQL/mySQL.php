<?php

function connectDB() {
    $servername = 'localhost';
    $dbname = 'auto';
    $username = 'auto';
    $password = 'LabaiSlaptas123';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Nepavyko prisjungti: ' . $conn->connect_error);
    }

    return $conn;
}
$conn = connectDB();
$sql = 'SELECT * FROM radars';
$result = $conn -> query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo '<tr><td>'.$row['id'].'</td><td>'.$row['date'].'</td><td>'.$row['number'].'</td><td>'.$row['distance'].'</td><td>'.$row['time'].'</td></tr>';
    }
}else{
    echo '0 Results';
}

$conn->close();
