<?php
	require_once("dbcon.php");
	function GetTheLoai($IDTL){
		$sql = "SELECT Name FROM TheLoai WHERE ID = $IDTL";
		$TheLoai = mysql_query($sql) or die(mysql_error());
		$rowTheLoai = mysql_fetch_assoc($TheLoai);
		return $rowTheLoai;
	}

	function UpdateTheLoai($IDTL){
		$err = "";
		//Tiếp nhận dữ liệu từ form
		$Ten = $_POST['Ten'];

		//kiểm tra dữ liệu
		$Ten = trim(strip_tags($Ten));
		if (empty($Ten)){
			$err = "Tên không được bỏ trống";
			return $err;
		}
		if(get_magic_quotes_gpc()==false) $Ten = mysql_real_escape_string($Ten);
		//chèn dữ liệu vào DB
		$sql = "UPDATE TheLoai SET Name='$Ten' WHERE ID=$IDTL";
		mysql_query($sql) or die(mysql_error());
		return $err;
	}//Update the loai


	$IDTL = $_GET['IDTheLoai'];
	$TheLoai = GetTheLoai($IDTL);

	if(isset($_POST["Update"])){
		$err = UpdateTheLoai($IDTL);
		if ($err == ""){
			header("Location: list.php");
		}
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Update Thể Loại</title>
	<style type="text/css">
	</style>
</head>
<body>
	<div>
		<form action="" method="post">
			<?php echo $err; ?>
			<input type="text" name="Ten" value="<?php echo $TheLoai['Name'] ?>"/>
			<input type="submit" name="Update" value="Sửa" />
		</form>
	</div>
</body>
</html>