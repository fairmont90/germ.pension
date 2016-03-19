<?php

require_once 'bootstrap.php';

global $dbh;

$sql_req = 'select * from questions';
$sth = $dbh->query($sql_req);

$questions = $sth->fetchAll();

$sql_req = 'select * from questionanswers';
$sth = $dbh->query($sql_req);
$answers = $sth->fetchAll();


function render_question_numbers() {
    global $questions;

    $question_count = count($questions) + 1;
    for ($i=1; $i < $question_count; $i++) { 
        echo '<span>' . $i . '</span>';
    }
}

function render_questions() {
    global $answers, $questions;

	foreach ($questions as $key => $question) {
		$qid = $question['Id'];
		?>
<div id="Question<?php echo $qid?>" class="question-card hidden">
  <table>
    <tr>
      <th valign="middle"><img src="<?php echo $question['QuestionIcon']?>" alt="Kinder Image"></th>
      <th valign="middle"><?php echo $question['Question']?></th>
    </tr>
  </table>

  <br>
	<?php 
	foreach ($answers as $key => $answer) {
		if ( $answer['QuestionId'] != $qid ) {
			continue;
		}
?>
<div class="input-form col-md-3">
	<input id="Opt-<?php echo $qid . '-' . $answer['Id']?>" onclick="nextQuestion()" type="radio" name="<?php echo $qid ?>" value="<?php echo $answer['Id'] ?>" class="option">
	<label for="Opt-<?php echo $qid . '-' . $answer['Id']?>">
	  <img src="<?php echo $answer['AnswerImage'] ?>" alt="opt-1-1">
	  <span><?php echo $answer['AnswerText'] ?></span>
	</label>
</div>
<?php
		}
?>
</div>
<?php
	}

}