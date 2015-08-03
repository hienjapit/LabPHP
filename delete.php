<?php
	/* 2 lệnh này xuất ra thông báo lỗi khi có lỗi*/
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	/*===Có thể thiết lập trong php.ini ====*/
	require_once("dbcon.php");

	function DeleteTheLoai($IDTheLoai){
		$sql = "DELETE FROM TheLoai where ID=$IDTheLoai";
		$err  = mysql_query($sql) or die(mysql_error());
		// Nếu thực thi lệnh thành công thì return true, ngược lại false
		return $err;
	}//Xoa the loai

	$ID = $_GET["IDTheLoai"];
	$ok = DeleteTheLoai($ID);
	if ($ok){
		header("Location: list.php");
	}
	
?>