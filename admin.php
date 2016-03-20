<?php
require_once 'app/bootstrap.php';
require_once 'app/functions/admin_functions.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="navbar-collapse collapse menu">
    
    <div class="navbar navbar-form">
        <div class="btn-group" style="float: right">
            <a href="add_question.php" class="btn btn-default">Add Question</a>
            <a href="index.php" class="btn btn-default">Exit</a>
        </div>
    </div>
</div> 

<div class="container">
    <form action="app/functions/post_activate_questions.php" method="POST">
        <table class="table table-striped">
            <tr>
                <td>Question</td>
                <td>Is Active</td>
            </tr>
            <?php
                renderQuestionsInTableRows();
            ?>
        </table>

        <input type="submit" class="btn btn-success" value="Save" style="float: right;">

    </form>
</div>


<div class="container">
<!-- <?php
    renderUsersAnswers();
?> -->
</div>

</body>
</html>
