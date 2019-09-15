<?php /*
$connect = mysqli_connect('127.0.0.1', 'root', '', 'test_bd');
if($connect == false)
{
	echo mysqli_connect_error();
	die();
}*/
	$dsn = 'mysql:dbname=test_bd;host=127.0.0.1';
	$user = 'root';
	$password = '';

	try {
		$dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
		echo 'Подключение не удалось: ' . $e->getMessage();
	}

?>