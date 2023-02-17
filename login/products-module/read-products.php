<!DOCTYPE html>
<html>
	<head>
		<title>Dormitory Reservation Homepage</title>
		<link rel="stylesheet" href="css/style.css?<?php echo time();?>">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col">
					<h3>List of Products</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="table-responsive">
					
					<table class="table table-bordered table-striped">
						<thead>
							<th>Product ID &nbsp|&nbsp&nbsp</th> 
							<th>Product Name &nbsp|&nbsp&nbsp</th> 
							<th>Product Price &nbsp|&nbsp&nbsp</th>
						</thead>
						<tbody>
							<?php
							$conn = mysqli_connect("localhost", "root", "", "db_wbapp");

							$query = "SELECT * FROM tbl_products";
							$query_run = mysqli_query($conn, $query);

							if(mysqli_num_rows($query_run) > 0)
							{
								foreach($query_run as $row)
								{
									?>
										<tr>
											<td><?= $row['product_id']; ?></td>
											<td><?= $row['product_name']; ?></td>
											<td><?= $row['product_price']; ?></td>
										</tr>
									<?php
								}
							}
							else
							{
								?>
									<tr>
										<td colspan="7"No Record Found</td>		
									</tr>
								<?php
							}
										
							?>
						</tbody>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>