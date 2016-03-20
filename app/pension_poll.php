<?php

require_once 'bootstrap.php';

global $dbh;

$sql_req = 'select * from questions';
$sth = $dbh->query($sql_req);

$questions = $sth->fetchAll();

$sql_req = 'select * from question_answers';
$sth = $dbh->query($sql_req);
$answers = $sth->fetchAll();

$active_questions = 0;
foreach ($questions as $key => $q) {
    if ( $q['is_active'] == 0 ) {
        continue;
    }
    $active_questions ++;
}

function render_question_numbers() {
    global $questions;

    foreach ($questions as $key => $question) {
        if ( $question['is_active'] == 0 ) {
            continue;
        }
        $i ++;

        echo '<span>' . $i . '</span>';
    }
}

function render_questions() {
    global $answers, $questions, $active_questions;

  foreach ($questions as $key => $question) {
    $qid = $question['id'];

    if ( $question['is_active'] == 0 ) {
        continue;
    }

    $questions_counter++;
    $is_last_one = $active_questions == $questions_counter;
    ?>
<div id="Question<?php echo $questions_counter?>" class="question-card easy-hidden">
  <table>
    <tr>
      <th valign="middle" class='question-logo'><img src="<?php echo $question['question_icon']?>" alt="Kinder Image"></th>
      <th valign="middle" class='question-text'><?php echo $question['question']?></th>
    </tr>
  </table>

  <br>
  <?php 
  foreach ($answers as $key => $answer) {
    if ( $answer['question_id'] != $qid ) {
      continue;
    }
?>
<div class="input-form col-md-3">
  <input id="Opt-<?php echo $qid . '-' . $answer['id']?>" onclick="<?= $is_last_one ? 'finishTest' : 'nextQuestion' ?>()" type="radio" name="<?php echo $qid ?>" value="<?php echo $answer['category_id'] . ',' . $answer['id'] ?>" class="option">
  <label for="Opt-<?php echo $qid . '-' . $answer['id']?>">
    <img src="<?php echo $answer['answer_image'] ?>" alt="opt-1-1">
    <span><?php echo $answer['answer'] ?></span>
  </label>
</div>
<?php
    }
?>
</div>
<?php
  }

  ?>
<div id="Question<?= $questions_counter + 1?>" class="question-card outtro easy-hidden">
  <table>
    <tr>
      <th valign="middle">FINISH</th>
    </tr>
    <tr>
      <td><h1>You have completed your test</h1></td>
    </tr>
    <tr>
      <td>
        <div class="btn-group btn-group-vertical">
          <input class="btn btn-default" onclick="setQuestionFormMode('pdf')" type="submit" value="Save results to pdf">
          <a class="btn btn-default" onclick="alert('this function is not ready yet')">Send results by email</a>
        </div>
      </td>
    </tr>
  </table>
</div>
  <?php

}