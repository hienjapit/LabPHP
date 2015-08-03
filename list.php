<?php
	require_once("dbcon.php");

	function ListTin(){
		$sql="SELECT ID, Name
			FROM  TheLoai
			ORDER BY ID";
		$kq = mysql_query($sql) or die (mysql_error());	
		return $kq;
	}

	$listTheLoai =  ListTin();

?>
<html>
<head>
	<meta charset="utf-8">
	<title>List Thể Loại</title>
	<style type="text/css">
		table{
			width: 100%;
		}
	</style>
</head>
<body>
	<table border="1px">
		<th>ID</th>
		<th>Name</th>
		<th>Action==><a href="insert.php">Thêm</a></th>
	<!-- loop the loai -->
	<?php 
		while ( $row = mysql_fetch_assoc($listTheLoai) ) {
	?>
		<tr>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Name'];?></a></td>
			<td><a href="update.php?IDTheLoai=<?= $row['ID']?>">Sửa</a>|<a href="delete.php?IDTheLoai=<?= $row['ID']?>">Xoá</a></td>
		</tr>
	<?php
		}
	?>
	<!-- End loop-->
	</table>
</body>
</html>