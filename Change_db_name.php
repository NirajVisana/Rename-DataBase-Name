<?php

if(isset($_POST['submit']))
{

$current_db=$_POST['Data_first'];
$new_db=$_POST['Data_new'];

	if(exec('sh rename_db.sh '.$current_db.' '.$new_db.' 2>&1'))
	{
		echo '<div class="alert alert-danger">
    <strong>Danger!</strong> Something Went Wrong.
  </div>';

	}
	else
	{
		echo '<div class="alert alert-success">
    <strong>Success!</strong> Database Named Changed Succesfully.
  </div>';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
    />

    <title>Database Rename Demo</title>
  </head>

  <body>
  	<br><br>
	<form name="demo" method="post" >
		<div class="form-group">
		<label>Enter Existing Database name :: </label><input class="form-control form-control-lg" type="text" name="Data_first"><br><br></div>

		<div class="form-group">
		<label>Enter New Database name ::</label><input type="text" class="form-control form-control-lg" name="Data_new"><br><br></div>

		<input type="submit" class="btn btn-primary" name="submit">	
	</form>

</body>
</html>