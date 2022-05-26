<?php
	$sql_bv="SELECT * FROM dsbaiviet WHERE dsbaiviet.ID_danhmucbaiviet='$_GET[id]' ORDER BY ID_Dsbaiviet DESC";
	$query_bv=mysqli_query($mysqli,$sql_bv);
	//danhmuc
	$sql_cate="SELECT * FROM danhmucbaiviet WHERE danhmucbaiviet.ID_Baiviet='$_GET[id]' LIMIT 1";
	$query_cate=mysqli_query($mysqli,$sql_cate);
	$row_tittle=mysqli_fetch_array($query_cate);
	
?>
<h3>Danh Mục Bài Viết: <span style="text-align: center; text-transform: uppercase;"><?php echo $row_tittle['tendanhmucbaiviet']?> </span></h3>
				<ul class = "List_Product">
						<?php				
							while($row_bv= mysqli_fetch_array($query_bv)){
						?>	
							<li>
							<a href="index.php?quanly=baiviet&id=<?php echo $row_bv['ID_Dsbaiviet']?>">
								<img src="ADMINcp/model/quanlybaiviet/Uploads/<?php echo $row_bv['hinhanh']?>">
								<p class="Title_Product">Tên Bài Viết: <?php echo $row_bv['tenbaiviet']?></p>
								<p class="Title_Product">Mô Tả </p>	
							</li>

						<?php
						}
						?>
				</ul>