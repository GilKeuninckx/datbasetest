<?php
echo gethostname();
echo '<p>Retrieved data from RDS</p>'
echo "<br>";
$password = "pxlpxlpxl";
$servername = "nfusetestdb.ci4avjuolz06.eu-west-3.rds.amazonaws.com";
$username = "pxl";
$dbname = "Terraformdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from data;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - datetime: " . $row["datetime"]. " " . $row["value"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
