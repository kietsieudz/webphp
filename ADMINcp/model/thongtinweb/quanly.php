<?php
	$sql_lienhe = "SELECT * FROM lienhe WHERE ID_Lienhe";
	$query_lienhe = mysqli_query($mysqli,$sql_lienhe);
?>
<p>Quản lý thông tin website</p>
<table border="1" width="100%" style="border-collapse: collapse;">
	<?php
		while($dong = mysqli_fetch_array($query_lienhe)){
	?>
	<form method="POST" action="model/thongtinweb/xuly.php?id=<?php echo $dong['ID_Lienhe']?>" enctype="multipart/form-data">	
			
	  <tr>
	    <td>Thông Tin Liên Hệ</td>
	    <td><textarea rows="10" name="thongtinlienhe" style="resize: none;"> <?php echo $dong['thongtinlienhe']?></textarea></td>
	  </tr>
	 
	  <tr>
	  	<td ><input type="submit" name="updateliennhe" value="Cập nhật thông tin liên hệ" ></td>
	  </tr>

		<?php	
		}
		?>  
	</form>  
</table>