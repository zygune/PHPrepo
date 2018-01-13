<?php
require_once "functions.php";

$sql = "SELECT * FROM radars";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //Outputs data of each row
    while ($row = $result->fetch_assoc())
    {
        echo "<tr>";
                echo "<td >" . $row["id"] . "</td>";
                echo "<td >" . $row["date"] . "</td>";
                echo "<td >" . $row["number"] . "</td>";
                echo "<td >" . $row["distance"] . "</td>";
                echo "<td >" . $row["time"] . "</td>";
                echo "</tr>";

    }
} else {
    echo "0 results!";
}




