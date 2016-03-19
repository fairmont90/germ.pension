<?php 

require 'app/bootstrap.php';

$login = $_POST["login"];
$pass = $_POST["password"];

$sql_req = 'select * from users where UserEmail = ?';
$sth = $dbh->prepare($sql_req);
$sth->bindParam(1, $login);
$sth->execute();

$result = $sth->fetch();

if ( $result ) {
	if ( $pass == $result['Password'] ) {
		$_SESSION['login'] = $result['UserEmail'];
        $_SESSION['id'] = $result['Id'];
	}
}
else {
	echo 'User was not found';
}

header('Location: /');