<form action="new_registration.php" method="post" enctype="multipart/form-data">
	<table style="min-width:400px;" class="table table-hover table-striped table-bordered" id="registration_tables">
		<caption style="font-size:30px; color:black;">
			Registration Details
		</caption>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Passward</th>
			<th>Address</th>
			<th>Contact Number</th>
			<th>Action</th>
		</tr>
			
			<?php
			include("includes/db.php");
			$sql1="select * from registration";
			$result = mysqli_query($con,$sql1);
			

			while($array=mysqli_fetch_array($result))
			{
			?>
				<tr>
					<td><?php echo $array['customer_name']?></a></td>
					<td><?php echo $array['customer_email']; ?></td>
					<td><?php echo $array['customer_pass']; ?></td>
					<td><?php echo $array['customer_address']; ?></td>
					<td><?php echo $array['customer_contact']; ?></td>
					<td>
						<a class="btn btn-danger" href="customer_delete.php?customer_email=<?php echo $array['customer_email'];?>">Delete</a>
					</td>
				</tr>

			<?php
			}
			?>
	</table>




</form>

