<?php
header('Content-Type: text/plain');
error_reporting(E_ERROR | E_PARSE);
$host = "localhost";
$user = "root";
$pass = "";
$db = "esp32_test";

define('DBPATH', $host);
define('DBUSER', $user);
define('DBPASS', $pass);
define('DBNAME', $db);

$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

echo "TETS";
$isPressed = $_POST['isPressed'];
$id_master = $_POST['id_master'];
echo $isPressed;
echo $id_master;
$sql = 'UPDATE device_smart_knock_lock SET IS_PRESSED = "' . $isPressed . '" WHERE ID_MASTER='. $id_master;
$insert = mysqli_query($mysqli, $sql);

?>