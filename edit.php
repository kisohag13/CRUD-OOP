<?php
include('crud.php');
$id=$_REQUEST['id'];
extract($obj->getbyid("tbl_student","*",$id));

if (isset($_REQUEST['id']))
{
	extract($_REQUEST);

	if($obj->updatebyid("tbl_student","name='$name',age='$age',roll='$roll',email='$email'","$id"))
	{
	header('location:index.php');
	}
	else{
	$err="update fail";
	}
}

?>
<!doctype html>
<html>
    <head>

          <title>Data Update page</title>
	     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
<body style="width: 800px; margin: 0 auto">
                <h2 class="text-center">Update your data</h2>
<?php  @$err; ?>
<form action="edit.php" method="post">
			<table class="table table-bordered table-condensed table-striped table-hover" width:"500" border="1" cellpadding="5" cellspacing="0">
				<tr>
					<th  scope="row" class="text-right">Name: </th>
					<td><input type="text" name="name" value="<?php echo $name;?>" class="form-control"></td>
				
				</tr>
				<tr>
					<th  scope="row" class="text-right">Age: </th>
					<td><input type="text" name="age" value="<?php echo $age;?>" class="form-control"></td>
				
				</tr>
				<tr>
					<th  scope="row" class="text-right">Roll: </th>
					<td><input type="text" name="roll" value="<?php echo $roll;?>" class="form-control"></td>
				
				</tr>
				<tr>
					<th  scope="row" class="text-right">Email: </th>
					<td><input type="text" name="email" value="<?php echo $email;?>" class="form-control"></td>
				
				</tr>
				<tr>
					
					<td><input class="btn btn-primary "type="submit" value="Update" name="form1"></td>
				</tr>
			</table>
    <input type ="hidden" name="id" value="<?php echo $id;?>">
</form>
 <br>
<a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span></a>

</body>
</html>