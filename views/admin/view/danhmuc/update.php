<?php

// vì phần danh mục sẽ trả về mảng nên dùng is_array()

if(is_array($dm)){
  extract($dm);
}

?>

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Content Row -->
<div class="row">
<div class="container py-4" >
    <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách danh mục  </h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<?php
    
    if (isset($message)) {
        echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
        </div>";
    }
    ?>

        <form action="index.php?act=update_dm" method="POST">
            <div class="form-group">
                <label for="ten_dm">Tên danh mục : </label>
                <input type="text" class="form-control" name="ten_dm" id="ten_dm" required value="<?=$ten_dm;?>">
            </div>
            <div class="form-group">
                <label for="mota_dm">Mô tả  danh mục : </label>
                <input type="text" class="form-control" name="mota_dm" id="mota_dm" required value="<?=$mota_dm;?>">
            </div>

            <input type="hidden" name="id_dm" value="<?=$id_dm;?>">
            <input type="submit" class="btn btn-primary" name="capnhap" value="Cập nhập Danh Mục">
            <a href="index.php?act=list_dm" class="btn btn-primary">Danh sách Danh Mục</a>

          
        </form>
   
    </div>

</div>
</div>