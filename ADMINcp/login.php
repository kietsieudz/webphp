<?php
 	session_start();
 	include('Config/config.php');
 	if(isset($_POST['dangnhap'])){
 		$taikhoan = $_POST['username'];
 		$matkhau = md5($_POST['password']);
 		$sql = "SELECT * FROM admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
 		$row = mysqli_query($mysqli,$sql);
 		$count = mysqli_num_rows($row);
 		if($count > 0){
 			$_SESSION['dangnhap'] = $taikhoan;
 			header("Location:index.php");
 		}else{
 			echo '<p>alert("Tài Khoản Hoặc Mật Khẩu Không Chính Xác, Vui Lòng Nhập Lại!!")</p>';
 			header("Location:login.php");
 		}

 	}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PK STORE LOGIN</title>
        <style type="text/css">
        	body{
        		background-image: url(img/anhdep.jpg);        		
        	}
        	.logo{
        		width: 55%;
        		margin: 0 auto;
        		color: #000;
        		padding: 70px;
        		text-align: center;
        		font-size: 20px;	
        	}
        	.Wrapper_login{
        		width: 30%;
        		margin: 0 auto;  
        		padding: 30px;     		
        	}
        	.table_login{
        		width: 100%;
        		background-color: #f2f2f2;
        	}
        	.table_login tr td{
        		padding: 7px;
        	}
        </style>
    </head> 
    <body>  
    	<div class="logo">
                <h1></h1>                          
            </div>
		<div class="Wrapper_login">
		    <form action="" autocomplete="off" method="POST">
				<table border="1" class="table_login" style="text-align: center;border-collapse: collapse;">
						<tr>
							<td colspan="2">
								<h3 >ĐĂNG NHẬP ADMIN_PK</h3>
	                        </td>
						</tr>
						<tr>
							<td><h4>Tài Khoản</h4></td>
							<td><input type="text" name="username" style="width: 90%; font-size: 17px;"  placeholder="Username..."></td>	
							
						</tr>
						<tr>
							<td><h4>Mật Khẩu</h4></td>
							<td><input type="password" name="password" style="width: 90%; font-size: 17px;" placeholder="Password..."></td>	
							
						</tr>
						<tr>
							<td colspan="2"><button style="width: 50%; margin: 10px;font-size: 15px;" type="submit" name="dangnhap" value="Đăng Nhập"><strong>Đăng Nhập</strong></button></td>
						</tr>	
				</table>
			</form>

		</div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</body> 

</html>	