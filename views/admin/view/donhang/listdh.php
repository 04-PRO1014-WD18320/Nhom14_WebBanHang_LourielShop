<h4 class="text-center ">Danh sách đơn hàng </h4>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã đơn hàng </th>
            <th>Khách hàng</th>
            <th>Địa chỉ</th>

            <th>Số điện thoại</th>
            <th>Mô tả đơn hàng </th>

            <th>Trạng thái</th>
            <th>Quản lý</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listhoadon as $hoadon) {
            extract($hoadon);
            $chitiethoadon = "index.php?act=chitiethd&id_hoadon=" . $id_hoadon;
            if ($xuly == 0) {
                $tam = "Chưa xử lý";
            } else if($xuly == 1) {
                $tam = "Hoàn Tất ";
            }
            else {
                $tam = "Hủy ";
            }
            echo '<tr>
                <td>' . $id_hoadon . '</td>
                <td>' . $ma_hd . '</td>
                <td>' . $ten . '</td>
                <td>' . $diachi . '</td>
                
                <td>' . $sodienthoai . '</td>
                <td>' . $mota_dh . '</td>
                
                <td>' . $tam . '</td>
                
                <td><a href="' . $chitiethoadon . '"><button class="btn btn-warning">Xem đơn hàng</button></a></td>
                </tr>';

        }
        ?>
    </tbody>
</table>