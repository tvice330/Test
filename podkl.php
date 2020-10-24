<?php
$servername = "localhost";
$database = "tvice_bd";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,  $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



$sql = 'INSERT INTO test (name) values("Nane")';
$result = mysqli_query($conn, $sql);
if ($result == false) {
    echo mysqli_error($conn);
    print("Ошибка");
}
mysqli_close($conn);
?>