<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    
  </head>
<?php
include('header.php');
include('links1.php');
 session_start();
 if(!isset($_COOKIE['user'])) {
    header("Location: /index.php");
}
?>
<body>
<div class="col-lg-8 col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-3 col-lg-offset-2">
<div class="well">
	 <fieldset >
		<form action="submit.php" method="GET"><br>
		echo file_get_contents("connect/cs/qus$qus/qus.txt");
fclose($myfile);
	    Select the Department: <br><br>
            <input type="radio" name="department" value="gn" checked/>General<br>		
            <input type="radio" name="department" value="ec"/>Electronics and Communication<br>
			<input type="radio" name="department" value="cs"/>Computer Science<br>
			<input type="radio" name="department" value="is"/>Information Science<br>
			<input type="radio" name="department" value="me"/>Mechanical<br>
			<input type="radio" name="department" value="it"/>Instrumentation Technology<br>
			<input type="radio" name="department" value="ce"/>Civil<br>
			<br>
			What's your Question? <br><br>

		    <textarea name="question" style="width: 250px; height: 150px;" placeholder="enter your QUESTION here...max in 140 characters" required></textarea><br><br>
			<input   type="hidden" value="0" name="smail">
			<input type="checkbox" name="smail" value="1"/>Notify  me via mail when answered<br><br>
			
			<input type="submit" name="submit" value="Submit"/><br>
		</form>
	</fieldset >
</div>
</div>
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>