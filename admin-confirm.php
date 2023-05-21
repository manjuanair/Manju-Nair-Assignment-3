<?php
include 'dbconnect.php';

$heading = $_POST['heading'];
$tripDate = $_POST['tripDate'];
$duration = $_POST['duration'];
$summary = $_POST['summary'];

$sql = "INSERT INTO Adventures (heading, tripDate, duration, summary)
VALUES ('$heading', '$tripDate', $duration, '$summary')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "<a href='all-adventures.php'>Go to All Adventures</a>";
?>