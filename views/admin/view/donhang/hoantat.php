<h4 class="text-center ">Đơn hàng hoàn tất </h4>
<table class="table">
<?php
    
    if (isset($message)) {
        echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show'>$message
            <button type='button' class='close' data-dismiss='alert'>&times;</button>
        </div>";
    }
    ?>
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã đơn hàng</th>
            <th>Ngày đặt đơn</th>
            <th>Tổng tiền</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($listhoantat as $hoantat) {
            extract($hoantat);
            $xacnhan_tam= "index.php?act=xacnhan_tam&id_hoadon=".$id_hoadon;
            if ($xuly == 2) {
                $tam = "Đã xác nhận";
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
                </tr>';
        }
        
        ?>
        

      
    </tbody>
    
</table>
       <div class="container py-4">
        <a href="index.php?act=listdh" class="btn btn-primary">Trở về</a>
    </div>