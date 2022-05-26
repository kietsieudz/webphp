<?php
	$sql_lietke_danhmucbaiviet = "SELECT * FROM danhmucbaiviet ORDER BY thutu DESC";
	$query_lietke_danhmucbaiviet = mysqli_query($mysqli,$sql_lietke_danhmucbaiviet);
?>
<p>Liệt Kê Danh Mục Bài Viết</p>
<table border="1" width="80%" style="border-collapse: collapse;">
  <tr>
  	<th>ID</th>
    <th>Tên Danh Mục Bài Viết</th>
    <th>Số Thứ Tự</th>
    <th>Quản Lý Danh Mục Bài Viết</th>
  </tr>
 <?php
 	$i = 0;
 	while ($row = mysqli_fetch_array($query_lietke_danhmucbaiviet)) {	
 	$i++; 	
 ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmucbaiviet']?></td>
    <td><?php echo $row['thutu']?></td>
  	<td>
  		<a href="model/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['ID_Baiviet']?>">Xoá</a> |<a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['ID_Baiviet']?>">Sửa</a>
  	</td>
  </tr> 
 <?php
 }
 ?> 
</table>

