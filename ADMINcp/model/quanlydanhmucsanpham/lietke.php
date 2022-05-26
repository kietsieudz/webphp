<?php
	$sql_lietke_danhmucsp = "SELECT * FROM danhmucsp ORDER BY thutu DESC";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<p>Liệt Kê Danh Mục Sản Phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
  <tr>
  	<th>ID</th>
    <th>Tên Danh Mục</th>
    <th>Số Thứ Tự</th>
    <th>Quản Lý Danh Mục</th>
  </tr>
 <?php
 	$i = 0;
 	while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {	
 	$i++; 	
 ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc']?></td>
    <td><?php echo $row['thutu']?></td>
  	<td>
  		<a href="model/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $row['ID_Danhmuc']?>">Xoá</a> |<a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['ID_Danhmuc']?>">Sửa</a>
  	</td>
  </tr> 
 <?php
 }
 ?> 
</table>

