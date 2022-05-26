<h3 style="text-align: center; text-transform: uppercase;">Tin Tức Mới Nhất</h3>
<?php
	$sql_bv="SELECT * FROM dsbaiviet WHERE tinhtrang=1 ORDER BY ID_Dsbaiviet DESC";
	$query_bv=mysqli_query($mysqli,$sql_bv);
	//danhmuc
	
?>

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
				