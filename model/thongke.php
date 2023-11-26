<?php 
    function loadall_thongke(){
        $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice" ;
        $sql.=" FROM sanpham left join danhmuc on danhmuc.id = sanpham.iddm";
        $sql.=" GROUP BY danhmuc.id ORDER BY danhmuc.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

    // thống kê sản phẩm theo danh mục 

function thongke_sanpham_dm(){
    $sql="SELECT d.ten_dm, COUNT(s.id_sp) as soLuongSanPham
    FROM sanpham s
    LEFT JOIN danhmuc d ON s.id_dm = d.id_dm
    GROUP BY d.ten_dm";
       $dm= pdo_query($sql);
       return $dm;
}
?>