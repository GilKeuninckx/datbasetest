<?php
echo gethostname();
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
        echo "Employee number: " . $row["emp_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
