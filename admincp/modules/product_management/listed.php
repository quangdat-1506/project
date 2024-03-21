<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_category ORDER BY tendanhmuc DESC";
	$query_lietke_danhmucsp = mysqli_query($conn, $sql_lietke_danhmucsp);

	// Thêm trang cho phần danh sách danh mục
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else $page=1;
	$rowsPerPage=5;
	$perRow=$page*$rowsPerPage - $rowsPerPage;
	$sql="select * from tbl_category order by id_category limit $perRow,$rowsPerPage";
	$query = mysqli_query($conn,$sql);
	
	$totalRows= mysqli_num_rows(mysqli_query($conn, "select * from tbl_category"));
	$totalPages=ceil($totalRows/$rowsPerPage);
	$listPage ="";
	for($i=1; $i <= $totalPages;$i++){
       if($page==$i){
           $listPage.='<li class ="active"><a href="quantri.php?page_layout=danhsachdm&page='.$i.'">'.$i.'</a></li>';
		}
       else $listPage .='<li><a href="quantri.php?page_layout=danhsachdm&page='.$i.'">'.$i.'</a></li>';
	}
?>
<div class="row">
    <div class="col-xs-12 col-md-5 col-lg-5">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm danh mục
            </div>
            <form class="panel-body" method="post" action="modules/category_management/handle.php">
                <div class="form-group">
                    <div class="name_list">
                        <label>Tên danh mục:</label>
                        <input type="text" name="tendanhmuc">
                    </div>
                    <div class="numerical_order">
                        <label>Thứ tự:</label>
                        <input type="text" name="thutu" style="margin-left: 53px">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="themdanhmuc"  class= "btn btn-primary" value="Thêm mới">
                </div>
            </form>
        </div>
    </div>

    <div class="col-xs-12 col-md-7 col-lg-7">
        <div class="panel panel-primary">
            <div class="panel-heading">Danh sách danh mục</div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-info">
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th style="width:30%">Tùy chọn</th>
                            </tr>
                        </thead>
                        <?php
                            $i = 0;
                            while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
                            $i++;
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row['tendanhmuc']?></td>
                                <td>
                                    <a href="?action=quanlydanhmucsanpham&query=sua&category_id=<?php echo $row['category_id'] ?>">Sửa</a> | 
                                    <a href="modules/category_management/handle.php?category_id=<?php echo $row['category_id'] ?>">Xóa</a>
                                </td>
                                <!-- <td></td> -->
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                <ul class="pagination" style="float: right">
                    <li><a href="#"><<</a></li>
                    <?php echo $listPage; ?>
                    <li><a href="#">>></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
