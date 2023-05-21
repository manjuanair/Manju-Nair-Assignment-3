<?php
include 'dbconnect.php';

$sql = "SELECT id, heading, tripDate, duration, summary FROM Adventures";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Heading: " . $row["heading"]. " - Trip Date: " . $row["tripDate"]. " - Duration: " . $row["duration"]. " - Summary: " . $row["summary"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>