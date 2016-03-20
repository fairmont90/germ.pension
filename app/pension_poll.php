<?php

require_once 'bootstrap.php';

global $dbh;

$sql_req = 'select * from questions';
$sth = $dbh->query($sql_req);

$questions = $sth->fetchAll();

$questions_counter = 0;

$sql_req = 'select * from question_answers';
$sth = $dbh->query($sql_req);
$answers = $sth->fetchAll();

function render_question_numbers() {
    global $questions;

    foreach ($questions as $key => $question) {
        $i ++;

        if ( $question['is_active'] == 0 ) {
            continue;
        }

        echo '<span>' . $i . '</span>';
    }
}

function render_questions() {
    global $answers, $questions;

  foreach ($questions as $key => $question) {
    $qid = $question['id'];

    if ( $question['is_active'] == 0 ) {
        continue;
    }

    $questions_counter++;
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
  <input id="Opt-<?php echo $qid . '-' . $answer['id']?>" onclick="nextQuestion()" type="radio" name="<?php echo $qid ?>" value="<?php echo $answer['category_id'] . ',' . $answer['id'] ?>" class="option">
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
      <td>
        <div class="input-form">
          Please enter your email:<br>
          <input type="text" name="email"><br>
        </div>
        <div class="btn-group">
          <input class="btn btn-default" onclick="setQuestionFormMode('email')" type="submit" value="Send email">
          <input class="btn btn-default" onclick="setQuestionFormMode('pdf')" type="submit" value="Get pdf">
        </div>
      </td>
    </tr>
  </table>
</div>
  <?php

}