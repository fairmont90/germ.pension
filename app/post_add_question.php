<?php

require_once 'bootstrap.php';

if ( !isset($_POST['question_text']) ) {
    exit;
}

$question = $_POST['question_text'];
$icon = $_POST['question_logo'];
$is_active = isset($_POST['question_is_active']);

$sql_req = 'INSERT INTO questions (question, question_icon, is_active) VALUES (:question, :icon, :is_active)';
$sth = $dbh->prepare($sql_req);


$sth->bindParam(':question', $question);
$sth->bindParam(':icon', $icon);
$sth->bindParam(':is_active', $is_active, PDO::PARAM_INT);
$sth->execute();

$qid = $dbh->lastInsertId();

$sql_req = 'INSERT INTO question_answers (question_id, answer, answer_image, category_id) VALUES ('.$qid.', :answer, :icon, :cat_id)';

for ($i=1; $i < 5; $i++) {
    $answer_text = $_POST['answer_'.$i.'_text'];
    $answer_icon = $_POST['answer_'.$i.'_img'];
    $answer_category_id = $_POST['answer_'.$i.'_category'];

    // echo $answer_text .' '. $answer_icon .' '. $answer_category_id . '<br>';

    $sth = $dbh->prepare($sql_req);
    $sth->bindParam(':answer', $answer_text);
    $sth->bindParam(':icon', $answer_icon);
    $sth->bindParam(':cat_id', $answer_category_id, PDO::PARAM_INT);
    if ( $sth->execute() ) {
        continue;
    }
}

header('Location: /admin.php');