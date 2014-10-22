<body>
	    <h1>Simple User Management - Adriana Titiu</h1>
		<h2>Show Data From Database Using CodeIgniter Order by Username Asc/Desc and Search Button </h2><hr/> 
	  <div class="container">
	  <?php 
	  if(isset($query)){
		?>
		<table id='users_list' class="display" cellspacing="0" width="100%" border="2">
			<thead>
				<tr>
					<th>Username</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Phone Number</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
		<?php
		foreach($query as $row){
			?>
			<tr>
			<td><?php echo $row->username; ?></td>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->password; ?></td>
			<td><?php echo $row->phone_number; ?></td>
			<td><?php echo $row->description; ?></td>
			</tr><?php
		}
		?>
		</tbody>
		</table>
		<?php
	  }
	  ?>
	  </div>
	  
	  <script>
		$(document).ready(function() {
			$('#users_list').dataTable( {
				"aaSorting": [[1,"asc"]],
				"processing": true,
			} );
		} );
	  </script>
    </body>
</html>
