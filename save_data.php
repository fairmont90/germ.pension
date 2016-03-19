<?php

require_once 'app/bootstrap.php';

$user_email = $_POST['email'];

$sql_req = "INSERT INTO user_answers (email, q1_id, q2_id, q3_id) VALUES ('$user_email', $_POST[1], $_POST[2], $_POST[3])";
$dbh->query($sql_req);

header('Location: /');