<?php
	//session_start();
// Create connection
$conn = new mysqli("localhost","vishal","welcome","user");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
$sql = "select * from admin ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "". $row["username"]."" . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
echo "Connected successfullya";

?>
