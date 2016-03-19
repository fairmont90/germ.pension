<?php require_once 'app/bootstrap.php'; ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    


<?php


$sth = $dbh->query('SELECT * FROM user_answers ua JOIN questionanswers qa where qa.Id = ua.q1_id or qa.Id = ua.q2_id or qa.Id = ua.q3_id');
$result = $sth->fetchAll();

$uid = 0;
$i = 0;
$first = true;

foreach ($result as $key => $label) {
    $user_id = $label['id'];

    if ( $uid != $user_id ) {
        if ( !$first ) {
            echo '</div>';
        }

        echo "<div>";
        //echo '<span><b>' . 'user_email' . '</b></span>';
        echo "<span class='field-user-email'><b>".$label['email']."</b></span><br>";

        $uid = $user_id;
        
        $i = 1;
    }

    echo '<span>User likes ' . $label['AnswerText'] . '</span><br>';
}

?>

</body>
</html>
