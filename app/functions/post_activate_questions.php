<?php

require_once '../bootstrap.php';

$sql_req = 'UPDATE questions set is_active=0';
$dbh->query($sql_req);

$sql_req = 'UPDATE questions set is_active=1 where id = :qid';

foreach ($_POST as $key => $value) {
    if ( !is_numeric($key) ) {
        continue;
    }

    $sth = $dbh->prepare($sql_req);
    $sth->bindParam(':qid', $key, PDO::PARAM_INT);
    $sth->execute();
}

header('Location: /admin.php');