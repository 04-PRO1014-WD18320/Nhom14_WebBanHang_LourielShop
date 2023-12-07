<h4 class="text-center ">Đơn hàng đang xác nhận   </h4>
<?php
    
    if (isset($message)) {
        echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
        </div>";
    }
    ?>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt đơn</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ( $listxacnhan as $xacnhan) {
            extract($xacnhan);
            $xacnhan_tam= "index.php?act=giao_donhang&id_hoadon=".$id_hoadon;
           
            if ($xuly== 1) {
                $tam = "Đã xác nhận ";
            } else {
                $tam = "Chưa xử lý";
            }
            echo '
            <tr>
                 <td>' . $id_hoadon . '</td>
                 <td>' . $ma_hd . '</td>
                 <td>' . $ngaydatdon . '</td>
                 <td>' . $tongtien . '</td>
                 <td>' . $tam . '</td>
                <td>
                <a href="'.$xacnhan_tam.'">Xác nhận</a> 

           
               </td>
                </tr>';;
        }
        ?>

    </tbody>
</table>
