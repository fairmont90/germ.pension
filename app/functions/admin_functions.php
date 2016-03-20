<?php

require_once 'app/bootstrap.php';

function renderQuestionsInTableRows() {
    global $dbh;

    $sth = $dbh->query('SELECT * FROM questions');
    $questions = $sth->fetchAll();

    foreach ($questions as $key => $q) {
?>
<tr>
    <td><?= $q['question']  ?></td>
    <td><input type="checkbox" name="<?= $q['id']?>" <?php echo $q['is_active'] == 1 ? 'checked' : '' ?>></td>
</tr>
<?php   
    }
}

function renderUsersAnswers() {
    global $dbh;

    $sth = $dbh->query('SELECT * FROM user_answers ua JOIN questionanswers qa where qa.Id = ua.q1_id or qa.Id = ua.q2_id or qa.Id = ua.q3_id');
    $result = $sth->fetchAll();

    $uid = 0;
    $i = 0;
    $first = true;

    echo '<div>';

    foreach ($result as $key => $label) {
        $user_id = $label['id'];

        if ( $uid != $user_id ) {
            echo '</div><div>';

            echo "<span><b>".$label['email']."</b></span><br>";

            $uid = $user_id;
            
            $i = 1;
        }

        echo '<span>User likes ' . $label['AnswerText'] . '</span><br>';
    }
}