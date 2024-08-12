
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ahakamul_db_for_kcbd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else{
//     echo "Connection Successfully";
// }

?>