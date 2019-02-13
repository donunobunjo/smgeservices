<!DOCTYPE html>
<html>
<head>
	<title>List Of Enquiries</title>
	<style>
	body{
		font-family: calibri;
	}
#biggidroid {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 500px;
    font-weight: bold;
}

#biggidroid td, #biggidroid th {
    border: 1px solid #ddd;
    padding: 8px;
}

#biggidroid tr:nth-child(even){background-color: #f2f2f2;}

#biggidroid tr:hover {background-color: #ddd;}

#biggidroid th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
	
	<div style="overflow-x:auto;">
		<table id="biggidroid">
		<tr>
			<th>Full Name:</th>
			<th>Email:</th>
            <th>Phone</th>
            <th>Category</th>
            <th>Message</th>
            <th>Option</th>
		</tr>
	<?php
	include("./db.php");
	$query = mysqli_query($con, "SELECT * FROM enquiry order by iden desc;");
	while ($row = mysqli_fetch_array($query)) {
	?>
		<tr>
			<td><?php echo $row['fullNames']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['category']; ?></td>
			<td><?php echo $row['msg']; ?></td>
			<td>
				<!--<a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>-->
				<!--<a href="delete.php?iden=<?php echo $row['iden'] ?>">Delete</a>-->
			</td>
		</tr>
	<?php } ?>
	</table>
</div>

</body>
</html>