<?php
	require_once("dbcon.php");

	function InsertTheLoai(){
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
		$sql = "INSERT INTO TheLoai (Name) VALUES ('$Ten')";
		mysql_query($sql) or die(mysql_error());
		return $err;
	}//ThemLoaiTin

	if(isset($_POST["Insert"])){
		$err = InsertTheLoai();
		if ($err == ""){
			header("Location: list.php");
		}
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>List Thể Loại</title>
	<style type="text/css">
	</style>
</head>
<body>
	<div>
		<form action="" method="post">
			<?php echo $err; ?>
			<input type="text" name="Ten" />
			<input type="submit" name="Insert" value="Thêm" />
		</form>
	</div>
</body>
</html>