php
php
$servername = localhost;
$username = root;
$password = Pakkunji!1309;
$dbname = HalifaxCanoe;

 Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 Check connection
if ($conn-connect_error) {
  die(Connection failed  . $conn-connect_error);
}
