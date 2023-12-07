<?php

extract($chitietsanpham);

if(isset($_POST["gui"]) && ($_POST['gui'])){
    $ma_hd = $_POST['ma_dh'];
    echo $ma_hd; // Fix the variable name here

    function huydonhang($ma_hd){
        $sql = "UPDATE hoadon SET xuly = 4 WHERE ma_hd = '".$ma_hd."'"; // Fix the SQL query here
        pdo_execute($sql);
    }

    huydonhang($ma_hd); 
    echo "<script>
    alert('Đơn hàng đã được hủy');
    window.location.href = 'index.php?act=dathang'; 
  </script>";
}

?>

<div class="container">
    <h2 class="mb-4">Hủy đơn hàng </h2>
   
    <form action="" method="POST" enctype="multipart/form-data">
         <div class="mb-3 row">
            <div class="col">
                <label for="productName" class="form-label">Tên sản phẩm:</label>
                <span class="form-text" style="font-size:2rem;"><?=$ten_sp?></span>
            </div>
            <div class="col">
                <label for="productImage" class="form-label">Hình ảnh sản phẩm </label>
                <img src="views/admin/view/upload/<?=$anh_sp?>" alt="" class="img-fluid" style="width:120px; height:120px">
            </div>
            <div class="col">
                <label for="price" class="form-label">Giá tiền:</label>
                <span class="form-text"  style="font-size:2rem;"><?=$dongia?></span>
            </div>
        </div>
 
        <input type="hidden" name="ma_dh" value="<?=$ma_dh?>">
        <div class="mb-3">
            <label for="review" class="form-label">Lý do :</label>
            <textarea class="form-control" id="review" rows="3" required name="noidung_bl"></textarea>
        </div>


            <div class="col">
                <!-- Nút gửi bình luận -->
                <input type="submit" class="btn btn-primary" name="gui" value="Gửi" data-toggle="modal" data-target="binhluanthanhcong">
            </div>
        </div>
    </form>
</div>
