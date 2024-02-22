<!-- <?php 
    $sql_sua_danhmucsp = "SELECT * FROM tbl_category WHERE category_id='" . $_GET['category_id'] . "' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($conn, $sql_sua_danhmucsp);
?> -->

<!-- <?php
$category_id=$_GET['category_id'];
$sql="select * from tbl_category where category_id ='$category_id'";
$query=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if(isset($_POST["fix"])){
    $name_list = $_POST['fix'];
    if(isset($name_list)){
        $sql="update tbl_category set name_list ='$name_list' where category_id = '$category_id'";
        $query=mysqli_query($conn,$sql);
        header('location:../../index.php?action=quanlydanhmucsanpham');
    }
}

?> -->
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
</div>