<div class="container-wrapper">
    <h4 class="text-center">Chi tiết đơn hàng : <?php echo $ma_hd?></h4>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Người Dùng </th>
                <th>Tên Sản Phẩm </th>
                <th>Ảnh sản phẩm </th>
                <th>Số lượng</th>
                <th>Đơn Giá</th>
                <th>Thành tiền </th>
                <th>Địa chỉ</th>
                <th>Số điện thoại </th>
                <th>Ghi chú</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ( $chitiethoadon as $index => $value){?>
                
                <tr></tr>
                    <td><?=$index+1?></td>
                    <td><?=$value['ten']?></td>
                    <td><?=$value['ten_sp']?></td>
                    <td><img style="width: 120px ; height: 120px" src="view/upload/<?=$value['anh_sp']?>" alt=""></td>
                    <td><?=$value['soluong']?></td>
                    <td><?=$value['dongia']?></td>
                    
                    <td><?=$value['thanhtien']?></td>
                    <td><?=$value['diachi']?></td>
                    <td><?=$value['sodienthoai']?></td>
                    <td><?=$value['ghichu']?></td>
                    
                </tr>
            
            <?php } ?>
        </tbody>
    </table>

    <div class="container py-4">
        <a href="index.php?act=listdh" class="btn btn-primary">Trở về</a>
    </div>
</div>
