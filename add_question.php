<?php require_once 'app/bootstrap.php'; ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Admin pannel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="navbar-collapse collapse menu" style="height:90px !important">
     <a href="admin.php" class="btn btn-default">Admin</a>
     <a href="add_question.php" class="btn btn-default">ADD TEST</a>
</div> 

<div class="TTWForm-container">
      
      
   <form> 		
      		 <caption>Text Question</caption>
  		<div class="row ">
    	<div class="col-xs-3">
    		  <input type="text" class="form-control">
  	 	</div>
   		</div>

          <div id="field8-container" class="field f_100 checkbox-group required">
               <label for="field8-1">
                    default
               </label>
               
               <div class="option clearfix">
                    <input name="field8[]" id="field8-1" value="" type="checkbox">
                    <span class="option-title">
                    </span>
                    <br>
               </div>
          </div>
        
     </form>
</div>

   <form>
   			<caption>Text</caption>
  <div class="row ">
    <div class="col-xs-3">
      <input type="text" class="form-control">
    </div>
    <div class="col-xs-4">
      <input type="text" class="form-control">
    </div>
    <div class="col-xs-5">
      <input type="text" class="form-control">
    </div>
  </div>
  <br />

  			<caption>Picture</caption>
  <div class="row">
    <div class="col-xs-3 file-input btn btn-block btn-primary">
    		+ add files
            <input type="file" name="file" id="image_upload" required>
      		<textarea class="form-control"></textarea>
    </div>
    <div class="col-xs-4 file-input btn btn-block btn-primary">
    		+ add files
            <input type="file" name="file" id="image_upload" required>
     		 <textarea class="form-control"></textarea>
    </div>
    <div class="col-xs-5 file-input btn btn-block btn-primary">
   			 + add files
            <input type="file" name="file" id="image_upload" required>
      		<textarea class="form-control"></textarea>
    </div>
  </div>
  <br />

  				<caption>ID:</caption>
  <div class="row ">
    <div class="col-xs-3">
      <select class="form-control">
        <option>Pension</option>
        <option>Driving licence (Car)</option>
        <option>House</option>
        <option>Wedding</option>
        <option>Child wish</option>
        <option>Travel</option>
      </select>
    </div>
    <div class="col-xs-4">
      <select class="form-control">
        <option>Pension</option>
        <option>Driving licence (Car)</option>
        <option>House</option>
        <option>Wedding</option>
        <option>Child wish</option>
        <option>Travel</option>
      </select>
    </div>
    <div class="col-xs-5">
      <select class="form-control">
        <option>Pension</option>
        <option>Driving licence (Car)</option>
        <option>House</option>
        <option>Wedding</option>
        <option>Child wish</option>
        <option>Travel</option>
      </select>
    </div>
  </div>
</form>
</body>
</html>