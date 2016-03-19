<?php

require_once 'bootstrap.php';

function render_questions() {
	global $dbh;

	$sql_req = 'select * from questions';
	$sth = $dbh->query($sql_req);

	$questions = $sth->fetchAll();

	$sql_req = 'select * from questionanswers';
	$sth = $dbh->query($sql_req);
	$answers = $sth->fetchAll();

	foreach ($questions as $key => $question) {
		$qid = $question['Id'];
		$is_hidden = $key != 0;
		?>
<div id="Question<?php echo $qid?>" class="question-card <?php echo $is_hidden ? 'hidden' : '';?>">
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