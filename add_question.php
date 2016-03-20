<?php
require_once 'app/bootstrap.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.2.1.min.js"></script>
</head>
<body>
<div class="navbar-collapse collapse menu" style="height:90px !important">
     <a href="admin.php" class="btn btn-default">Admin</a>
</div> 

<div class="container">

  <form action="app/post_add_question.php" method="POST">
    <caption>Add question to your poll</caption>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="QuestionText">Enter question text</label>
          <input class="form-control" type="text" name="question_text" value="Is this a question?">
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="form-group">
          <label for="QuestionLogo">Select question logo</label>
          <input class="form-control" type="text" name="question_logo" value="img/logos/logo_1.png">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label>Is question active</label><br>
          <input type="checkbox" name="question_is_active" checked>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <span class="question-counter">1.</span>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="Answer1">Answer</label>
          <input id="Answer1" class="form-control" type="text" name="answer_1_text" value="Yes">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="Answer1">Answer category</label>
          <select class="form-control" name="answer_1_category">
            <option value="1">None</option>
            <option value="2">Pension</option>
            <option value="3">Driving licence (Car)</option>
            <option value="5">House</option>
            <option value="6">Wedding</option>
            <option value="7">Children</option>
            <option value="8">Travel</option>
          </select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="QuestionLogo">Answer image</label>
          <input class="form-control" type="text" value="img/questions/4.1.png" name="answer_1_img">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <span class="question-counter">2.</span>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="Answer2">Answer</label>
          <input id="Answer2" class="form-control" type="text" name="answer_2_text" value="No">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="Answer2">Answer category</label>
          <select class="form-control" name="answer_2_category">
            <option value="1">None</option>
            <option value="2">Pension</option>
            <option value="3">Driving licence (Car)</option>
            <option value="5">House</option>
            <option value="6">Wedding</option>
            <option value="7">Children</option>
            <option value="8">Travel</option>
          </select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="QuestionLogo">Answer image</label>
          <input class="form-control" type="text" value="img/questions/4.1.png" name="answer_2_img">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <span class="question-counter">3.</span>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="Answer3">Answer</label>
          <input id="Answer3" class="form-control" type="text" name="answer_3_text" value="Maybe">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="Answer3">Answer category</label>
          <select class="form-control" name="answer_3_category">
            <option value="1">None</option>
            <option value="2">Pension</option>
            <option value="3">Driving licence (Car)</option>
            <option value="5">House</option>
            <option value="6">Wedding</option>
            <option value="7">Children</option>
            <option value="8">Travel</option>
          </select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="QuestionLogo">Answer image</label>
          <input class="form-control" type="text" value="img/questions/4.1.png" name="answer_3_img">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1">
        <span class="question-counter">4.</span>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="Answer4">Answer</label>
          <input id="Answer4" class="form-control" type="text" name="answer_4_text" value="I don't know">
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group">
          <label for="Answer4">Answer category</label>
          <select class="form-control" name="answer_4_category">
            <option value="1">None</option>
            <option value="2">Pension</option>
            <option value="3">Driving licence (Car)</option>
            <option value="5">House</option>
            <option value="6">Wedding</option>
            <option value="7">Children</option>
            <option value="8">Travel</option>
          </select>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="QuestionLogo">Answer image</label>
          <input class="form-control" type="text" value="img/questions/4.1.png" name="answer_4_img">
        </div>
      </div>
  
      <div class="col-md-12">
        <input class="btn btn-success" type="submit" value="Add Question" style="float:right">
      </div>

    </div>

  </form>
</div>


<script>
    $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
            console.log(numFiles);
            console.log(label);
        });
    });
</script>

</body>
</html>