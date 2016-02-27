<?php
include('crud.php');



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Crud table</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">-->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="
 sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
  
	<body>


	<?php
	if (isset($_REQUEST['id_d'])) {

	$id_d=$_REQUEST['id_d'];
	if ($obj->deletebyid("tbl_student",$id_d)) {

		echo "Delete Success";
	}
	else{
		$de= "Delete Fail";
	}
}

	?>
	<?php @$de;?>
	    <div style="width: 960px; margin:0 auto; padding-top: 10px">
			<table  class="table table-striped table-bordered table-hover" width="700px" cellspacing="0" cellpadding="5px" >
			 <tr>
			 	<th class="text-center text-info">Serial No.</th>
				<th class="text-center text-info">Name</th>
				<th class="text-center text-info">Age</th>
				<th class="text-center text-info">Roll</th>
				<th class="text-center text-info">Email</th>
				<th class="text-center text-info">Action</th>
			 </tr>
			 <?php
			 $i=1;
			 $students=$obj->getall("tbl_student","*");
			 foreach($students as $student){
			 	extract($student)
			 	
			 	?>
			 <tr>
			 	<td><?php echo $i?></td>
			 	<td><?php echo $name?></td>
			 	<td><?php echo $age?></td>
			 	<td><?php echo $roll?></td>
			 	<td><?php echo $email?></td>
			 	<td><a class="btn btn-info" href="edit.php?id=<?php echo $id;?>"><span class="glyphicon glyphicon-pencil"></span></a>
			 	<a class="btn btn-danger" href="index.php?id_d=<?php echo $id;?>"><span class="glyphicon glyphicon-trash"></span></a>
			 	</td>
			 </tr>
			 <?php
			$i++;
			}

			 ?>

		    </table>
		    <button><a href="insert.php" class="btn btn-large btn-info">Insert More Data</a></button>
	    </div>
	</body>


</html>