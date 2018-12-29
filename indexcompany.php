<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
<body>
	<div class="container">
		<div class="panel panel-default" style="margin-top: 100px">
				<label style="font-size: 28px;margin-left: 15px">Data Members</label>
			<div class="panel panel-body">
				<a href="index.php" class="btn btn-info">1. CRUD Members</a>
				<a href="indexCity.php" class="btn btn-info">2. CRUD City</a>
				<a href="indexCompany.php" class="btn btn-info">3. CRUD Company</a>

				<a href="addCompany.php" class="btn btn-success">Add Data</a>
			

				<div class="table table-responsive" style="margin-top: 10px;">
					<table class="table table-striped">
						<tr>
							<th>No</th>
							<th>Company</th>
							<th></th>
							<th></th>
						</tr>

						<?php
							include "koneksiDB.php";
							$query = "SELECT * FROM company";
							$sql = mysqli_query($kon,$query);
							$no=0;
							while ($row = mysqli_fetch_array($sql)) {
								$no++;
						?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row["name"]; ?></td>
								
								<td>
									 <a href="editCompany.php?id=<?php echo $row['idcompany'] ?>" title="edit" class="btn btn-warning">Edit</a>
								</td>

								<td>
									<a href="deleteCompany.php?id=<?php echo $row['idcompany'] ?>" title="delete" class="btn btn-danger">Delete</a>
								</td>
							</tr>
								<?php
							}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>



