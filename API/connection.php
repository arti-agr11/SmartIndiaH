<?Php 
// $host = 'fdb26.awardspace.net';
// $username = '3240663_database2';
// $password = 'Abhishek@1234#';
// $database = '3240663_database2';

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'SIH';

$conn = new mysqli($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>