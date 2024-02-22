<div class="main">
    <?php
        if(isset($_GET['action'])){
            $tam = $_GET['action'];
        }else{
            $tam = '';
        }if($tam =='quanlydanhmucsanpham'){
            include("modules/category_management/more.php");
            include("modules/category_management/listed.php");
        }else{
            include("modules/introduce.php");
        }
    ?>
</div>