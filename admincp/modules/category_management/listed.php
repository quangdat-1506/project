<!-- <?php 
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_category ORDER BY sequence DESC";
	$query_lietke_danhmucsp = mysqli_query($conn, $sql_lietke_danhmucsp);
?>

<div class="listed">
	<p>Liệt kê danh mục sản phẩm</p>
	<table style="width: 50%" border="1" style="border-collapse: collapse;">
		<tr>
			<th border="1" style="border-collapse: collapse;">ID</th>
			<th>Tên danh mục</th>
			<th>Quản lý</th>
		</tr>

		<?php
			$i = 0;
			while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
			$i++;
		?>

		<tr>
			<td><?php echo $i ?> </td>
			<td><?php echo $row['name_list'] ?></td>
			<td>
				<a href="modules/category_management/handle.php?iddanhmuc=<?php echo $row['category_id'] ?>">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua">Sửa</a>
			</td>
		</tr>

		<?php
		}
		?>
	</table>

	
</div>
 -->