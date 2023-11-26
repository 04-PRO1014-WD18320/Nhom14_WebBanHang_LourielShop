<div class="container">
    <h4 class="text-center">Chi tiết đơn hàng - Đơn hàng số 1</h4>
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Mô tả đơn hàng</th>
                <th>Ngày đặt đơn</th>
                <th>Nơi nhận</th>
                <th>Chú thích</th>
                <th>Quá trình xử lí</th>
                <th>In đơn hàng</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($chitiethoadon as $index => $cthoadon) {
                extract($cthoadon);
                echo '
                <tr>
                    <td>' . ($index + 1) . '</td>
                    <td>' . $ma_hd. '</td>
                    <td>' . $mota_cthd . '</td>
                    <td>' . $ngaydatdon_cthd . '</td>
                    <td>' . $noinhan_cthd . '</td>
                    <td>' . $chuthich_cthd . '</td>
                    <td>' . $xuli_dh . '</td>
                    <td>' . $in_dh . '</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>

    <div class="container py-4">
        <a href="index.php?act=listdh" class="btn btn-primary">Trở về</a>
    </div>
</div>
