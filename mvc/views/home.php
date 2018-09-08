<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD MVC</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Muli:200,200i,300,400,600,700,800,900" rel="stylesheet">
	<style >
	  body{
	  	font-family: 'Muli', sans-serif;
	  	font-weight: 300;
	  }
		
	</style>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<h1 class="text-center"> <i class= "fa fa-users"></i>CRUD MVC</h1>
				<hr>
				<a href="" class="btn btn-success"><i class= "fa fa-plus">Add User</i></a>
				<br><br>
				<table class="table table-striped table-hover table-dark">
				 <tread>
					<tr>
						<th>Id</th>
						<th>FirstName</th>
						<th>LastName</th>
						<th>Email</th>
						<th>Actions</th>
					</tr>
				 </tread>
				 <tbody>
				 	<?php foreach ($data as $user): ?>
				 		<tr>
				 			<td><?php echo $user['id']; ?></td>
				 			<td><?php echo $user['firstName']; ?></td>
				 			<td><?php echo $user['lastName']; ?></td>3
				 			<td><?php echo $user['email']; ?></td>
				 			<td>
				 				<a href = "" class="btn btn-sm btn-primary"><i class= "fa fa-search"></i></a> 
				 				<a href = "" class="btn btn-sm btn-info"><i class= "fa fa-pen"></i></a> 
				 				<a href = "" class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></a> 
				 			</td>
				 		</tr>
				 	<?php endforeach ?>	
				 </tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>