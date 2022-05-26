<?php
	session_start();
	include('../../ADMINcp/Config/config.php');
	$ID_Khachhang = $_SESSION['ID_Khachhang'];
	$code_order = rand(0,9999);
	$insert_cart = "INSERT INTO cart(ID_Khachhang,Code_Cart,Cart_Status) VALUE('".$ID_Khachhang."','".$code_order."',1)";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	if($cart_query){
		//them gio hang chi tiet
		foreach ($_SESSION['cart'] as $key => $value) {
			$ID_Sanpham = $value['id'];
			$soluong = $value['soluong'];
			$insert_order_details ="INSERT INTO cart_luudon(ID_Sanpham,Code_Cart,Soluongdon) VALUE('".$ID_Sanpham."','".$code_order."','".$soluong."')";
			mysqli_query($mysqli,$insert_order_details);
		}
	}
	unset($_SESSION['cart']);
	header('Location:../../index.php?quanly=camon');
?>
<p>Thanh Toán Đơn Hàng</p>
