<?php
echo gethostname();
echo "<br>";
$password = "pxlpxlpxl";
$servername = "testdbtf.cowtdketd1dd.us-east-1.rds.amazonaws.com";
$username = "pxl";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT emp_no, first_name, last_name FROM employees WHERE emp_no <= 10050";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Employee number: " . $row["emp_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}
echo "<img src='https://s3-us-west-1.amazonaws.com/project-cloud-snb-8.1/ikbeneenfoto.jpg'>";
$conn->close();
?>
