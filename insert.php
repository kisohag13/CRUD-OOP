<?php
include('crud.php');
//$id=$_REQUEST['id'];
//extract($obj->getbyid("tbl_student","*",$id));

if (isset($_REQUEST['submit']))
{
	extract($_REQUEST);

	if($obj->insert("tbl_student","name='$name',age='$age',roll='$roll',email='$email'"))
	{
	header('location:index.php');
	}
	else{
	$err="insert fail";
	}
}

?>
<!doctype html>
<html>
    <head>

          <title>Data Insert page</title>
	     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="
              sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
<body style="width: 800px; margin: 0 auto">
                <h2 class="text-center">Insert your data</h2>
<?php  @$err; ?>

<form action="insert.php" method="post">
			<table class="table table-bordered table-condensed table-striped table-hover" width:"500" border="1" cellpadding="5" cellspacing="0">
				<tr>
					<th  scope="row" class="text-right">Name: </th>
					<td><input type="text" name="name"  class="form-control"></td>
				
				</tr>
				<tr>
					<th  scope="row" class="text-right">Age: </th>
					<td><input type="text" name="age"  class="form-control"></td>
				
				</tr>
				<tr>
					<th  scope="row" class="text-right">Roll: </th>
					<td><input type="text" name="roll"  class="form-control"></td>
				
				</tr>
				<tr>
					<th  scope="row" class="text-right">Email: </th>
					<td><input type="text" name="email"  class="form-control"></td>
				
				</tr>
				<tr>
					
					<td><input class="btn btn-primary "type="submit" value="save" name="submit"></td>
				</tr>
			</table>
    
</form>
 

</body>
</html>