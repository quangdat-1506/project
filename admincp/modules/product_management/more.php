<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="font-weight: 400">Danh sách sản phẩm</h1>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12" style="margin-left: 240px; width: 82%">
        <a href="?action=quanlysanpham&query=sua&category_id" class="btn" style="background: #313a42; color: #fff">Thêm sản phẩm</a>
        <div class="bootstrap-table">
            <div class="table-responsive">

                <table class="table table-bordered" style="margin-top:20px;">
                    <thead>
                        <tr class="bg-info">
                            <th>ID</th>
                            <th width="30%">Tên Sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th width="20%">Ảnh sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
						<!-- <?php
						while($row = mysqli_fetch_array($query)){
						?> -->
                        <tr>
                            <td><?php echo $row['id_sp']; ?></td>
                            <td><?php echo $row['ten_sp'];?></td>
                            <td><?php echo $row['gia_sp'];?></td>
                            <td>
                                <img width="200px" src="img/<?php echo $row['anh_sp'];?>" class="thumbnail">
                            </td>
                            <td><?php echo $row['ten_dm'];?></td>
                            <td>
                                <a href="quantri.php?page_layout=suasp&id_sp=<?php echo $row['id_sp']; ?>" class="btn btn-warning"><span
                                        class="glyphicon glyphicon-edit"></span>Sửa</a>
                                <a onclick="return xoaSanPham();" href="xoasp.php?id_sp=<?php echo $row['id_sp']; ?>" class="btn btn-danger"><span
                                        class="glyphicon glyphicon-trash"></span>Xóa</a>
                            </td>
						</tr>
						<?php 
                            }
						?>
                    </tbody>
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

<style>
    .page-header {
        font-weight: 600;
    }

    .btn {
        background-color: #313a42;
    }

    .btn {
        background-color: red;
    }
</style>