<!-- <p>Thêm danh mục sản phẩm</p> -->
<!-- <table border="1" width="400px" style="border-collapse: collapse; margin: 15px; padding: 15px;">
    <form method="POST" action="modules/category_management/handle.php">
        <tr style="display: grid">
            <td>Tên danh mục</td>
            <td><input type="text" name="tendanhmuc" style="width: 100%;"></td>
        </tr>
        <tr style="display: grid">
            <td>Thứ tự</td>
            <td><input type="text" name="thutu" style="width: 100%;"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm"></td>
        </tr>
    </form>
</table> -->
<script>
    function xoaDanhMuc() {
    var conf = confirm("Bạn có chắc chắn muốn xóa danh mục này hay không?");
    return conf;
    }
</script>

<div class="row" style="margin-left: 20px;">
    <div class="col-lg-12">
        <h1 class="page-header">Danh mục sản phẩm</h1>
    </div>
</div>

<div class="row" style="margin-left: 230px;">
    <div class="col-xs-12 col-md-5 col-lg-5">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>Thêm danh mục</h3>
            </div>
            <form class="panel-body" method="POST" action="modules/category_management/handle.php">
                <div class="form-group" style="display: grid">
                    <label>Tên danh mục</label>
                    <input type="text" name="tendanhmuc" class="form-control" placeholder="Tên danh mục...">
                </div>
                <div class="form-group" style="display: grid">
                    <label>Thứ tự</label>
                    <input type="text" name="thutu" class="form-control" placeholder="Thứ tự...">
                </div>
                <div class="form-group">
                    <input type="submit" name="themdanhmuc" class="btn btn-primary" value="Thêm">
                </div>
            </form>
        </div>
    </div>

    <!-- <?php 
        $sql_lietke_danhmucsp = "SELECT * FROM tbl_category ORDER BY sequence DESC";
        $query_lietke_danhmucsp = mysqli_query($conn, $sql_lietke_danhmucsp);
    ?> -->

    <div class="col-xs-12 col-md-7 col-lg-7">
        <div class="listed ">
            <div class="panel-heading">
                <h3>Danh sách danh mục</h3>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th style="width: 165px">Quản lý</th>
                </tr>

                <?php 
                    $sql_lietke_danhmucsp = "SELECT * FROM tbl_category ORDER BY sequence DESC";
                    $query_lietke_danhmucsp = mysqli_query($conn, $sql_lietke_danhmucsp);
                ?>

                <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
                    $i++;
                ?>

                <tr>
                    <td><?php echo $i ?> </td>
                    <td><?php echo $row['name_list'] ?></td>
                    <td>
                        <a onclick="return xoaDanhMuc();" 
                        href="modules/category_management/handle.php?category_id=<?php echo $row['category_id'] ?>"
                        class="delete"><i class="fas fa-trash-alt"></i> Xóa</a> 
                        <a href="fix.php?category_id=<?php echo $row['category_id'] ?>"
                        class="fix"><i class="fas fa-tools"></i> Sửa</a>
                    </td>
                </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>

        <style type="text/css">
            .panel {
                margin-left: 20px;
/*                margin-top: 50px;*/
                width: 400px;
            }

            .panel-heading {
                border-top-right-radius: 4px;
                border-top-left-radius: 4px;
                height: 50px;
                background-color: #313a42;
            }

            .panel-heading h3 {
                color: #E8E8E8;
                padding-left: 15px;
                font-size: 20px;
                font-weight: 400;
                padding-top: 10px;
            }

            .panel form {
                padding: 15px;
                background-color: #fff;
                border-bottom-right-radius: 4px;
                border-bottom-left-radius: 4px;
            }

            .form-group label {
                font-size: 15px;
                font-weight: 700;
                margin-bottom: 5px;
            }

            .form-group input {
                margin-bottom: 15px 
            }

            .form-group .btn {
                background-color: #313a42;
                border: 1px solid #313a42;
                width: 80px;
                color: #E8E8E8;
            }

            .form-group .btn:hover {
                background-color: #161617;
            }

            .listed {
                width: 600px;
            }

            .listed p {
                background-color: #313a42;
            }

            .listed .table tr a {
                text-decoration: none;
                color: #fff;
                font-size: 15px;
            }

            .listed .table .delete {
                background-color: #d9534f;
                padding: 5px 13px;
                border-radius: 4px;
            }

            .listed .table .delete:hover {
                background-color: #d43f3a;
            }

            .listed .table .fix {
                background-color: #f0ad4e;
                padding: 5px 13px;
                border-radius: 4px;
            }

            .listed .table .fix:hover {
                background-color: #eea236;
            }
        </style>
</div>