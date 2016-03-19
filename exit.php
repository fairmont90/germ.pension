<?php

require_once ('app/bootstrap.php');

$old_user=$_SESSION['UserEmail'];
unset ($_SESSION['login']);
unset ($_SESSION['id']);
$result_dest=session_destroy();

header('Location: /');