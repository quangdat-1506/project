<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="margin-left: 240px">Sản phẩm</h1>
    </div>
</div>
<!--/.row-->

<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12" style="width: 1070px; margin-left: 299px;">
        <div class="panel panel-primary">
            <div class="panel-heading">Sửa sản phẩm</div>
            <div class="panel-body">
                <form method="POST" action="index.php?action=quanlysanpham&query=them" enctype="multipart/form-data">
                    <div class="row" style="margin-bottom:40px">
                        <div class="col-xs-8">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input required type="text" name="tensp"
                                    value=""class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input required type="text" name="giasp"
                                    value=""class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file" name="anhsp" class="form-control">
                                <input type="hidden" name='anhsp' value="<?php echo $row['anh_sp']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Phụ kiện</label>
                                <input required type="text" name="phukien"
                                    value=""class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Bảo hành</label>
                                <input required type="text" name="baohanh"
                                    value=""class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select required name="trangthai"
                                    value=""class="form-control">
                                    <option>Còn hàng</option>
                                    <option>Hết hàng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Miêu tả</label>
                                <textarea rows="5" class="form-control" required
                                    name="mieuta"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Danh mục</label>
                                <select required name="category_id" class="form-control">
                                    <option value="unselect">Lựa chọn nhà cung cấp</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sản phẩm nổi bật</label><br>
                                Có : <input type="radio" name="spnoibat">
                                <br>
                                Không : <input type="radio" name="spnoibat"> 
                            </div>
                            <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                            <a href="index.php?action=quanlysanpham&query=them" class="btn btn-danger">Hủy bỏ</a>
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-header {
        font-weight: 400;
    }

    .panel-heading {
        background-color: #313a42; 
        height: 60px; color: #fff; 
        line-height: 60px; 
        font-size: 20px; 
        padding-left: 15px;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }

    .panel-body form {
        background-color: #fff; 
        padding: 10px;
    }

    .form-group {
        padding-top: 12px;
    }

    .form-group label {
        font-weight: 600;
    }
</style>