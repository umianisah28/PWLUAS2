<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
	
	<div class="container" style="width: 50%;margin-top: 50px">
		<div class="panel panel-default">
			<label style="font-size: 28px;margin-left: 15px">Import Data Member</label>
			<div class="panel panel-body">
			<form method="POST" action="prosesAddData.php" enctype="multipart/form-data">
				<div class="form-group row">
					<div class="col-lg-12">
						<label>File Excel</label>
						<input type="file" name="file" id="file" class="form-control input-sm " required="">
					</div>
				</div>

				
					
					<input type="submit" name="import" value="import" class="btn btn-success">
					
				
				
			</form>	

			</div>
		</div>
	</div>
</body>
</html>