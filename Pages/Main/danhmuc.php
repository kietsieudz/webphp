<?php
	$sql_product="SELECT * FROM danhsachsp WHERE danhsachsp.ID_Danhmuc='$_GET[id]' ORDER BY ID_Danhsach DESC";
	$query_product=mysqli_query($mysqli,$sql_product);
	//danhmuc
	$sql_cate="SELECT * FROM danhmucsp WHERE danhmucsp.ID_Danhmuc='$_GET[id]' LIMIT 1";
	$query_cate=mysqli_query($mysqli,$sql_cate);
	$row_tittle=mysqli_fetch_array($query_cate);
	
?>
<h3>Danh Mục Sản Phẩm: <?php echo $row_tittle['tendanhmuc']?> </h3>
				<ul class = "List_Product">
						<?php				
							while($row_product= mysqli_fetch_array($query_product)){
						?>	
							<li>
							<a href="index.php?quanly=danhsachsp&id=<?php echo $row_product['ID_Danhsach']?>">
								<img src="ADMINcp/model/quanlysanpham/Uploads/<?php echo $row_product['anhsanpham']?>">
								<p class="Title_Product">Tên Sản Phẩm: <?php echo $row_product['tensanpham']?></p>
								<p class="Price_Product">Giá: <?php echo number_format($row_product['giaban'],0,',','.').'VND'?></p>
							</a>
							</li>
						<?php
						}
						?>
				</ul>
