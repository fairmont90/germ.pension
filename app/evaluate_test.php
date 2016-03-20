<?php

require_once 'bootstrap.php';

$sql_req = 'insert into answers';

foreach ($_POST as $key => $item) {
    if ( is_numeric($key) ) {
        $answer = split(',', $item);
    }
}