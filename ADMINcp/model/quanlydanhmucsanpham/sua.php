<?php
	$sql_sua_danhmucsp = "SELECT * FROM danhmucsp WHERE ID_Danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<p>Sửa Danh Mục Sản Phẩm</p>
<table border="1" width="20%" style="border-collapse: collapse;">
	<form method="POST" action="model/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">	
	<?php
		while($dong = mysqli_fetch_array($query_sua_danhmucsp)){

	?>	
	  <tr>
	    <td>Tên Danh Mục</td>
	    <td><input type="text" value="<?php echo $dong['tendanhmuc']?>" name="tendanhmuc"></td>
	  </tr>
	  <tr>
	    <td>Số thứ tự</td>
	    <td><input type="text" value="<?php echo $dong['thutu']?>" name="thutu"></td>
	  </tr>
	  <tr>
	  	<td ><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm" ></td>
	  </tr>
	  <?php
	  	}
	  ?>
	</form>  
</table>
