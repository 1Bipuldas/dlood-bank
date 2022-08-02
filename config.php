<?Php 

date_default_timezone_set('Asia/dhaka');

$server = "localhost";
$usname = "root";
$password = "";
$databnam = "blood_bank";

$conn = new mysqli ($server,$usname,$password,$databnam);


if ($conn->connect_error) {
	die("conn fald:".$conn->connect_error);
}




?>