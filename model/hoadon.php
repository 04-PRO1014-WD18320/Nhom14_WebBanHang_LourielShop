<?php

function insert_chitethoadon($ma_dh,$id_sanpham,$id_user,$soluong,$dongia,$thanhtien,$ghichu){
    $sql= "INSERT INTO chitiethoadon (ma_dh, id_sanpham ,id_user, soluong, dongia, thanhtien, ghichu,in_hoadon ) 
    VALUES ('$ma_dh',' $id_sanpham','$id_user','$soluong','$dongia','$thanhtien','$ghichu',0)";
    pdo_execute($sql);
}

function insert_hoadon($ma_dh,$vanchuyen,$Alltongtien) {
    $sql = "INSERT INTO hoadon (ma_hd,vanchuyen ,tongtien, trangthai, xuly) 
            VALUES ('$ma_dh', $vanchuyen,'$Alltongtien', 0, 0)";
    pdo_execute($sql);
}

function load_hoadon($id){
    $sql= "SELECT h.*, c.*, tk.*,s.*
    FROM hoadon h
    JOIN chitiethoadon c ON h.ma_hd = c.ma_dh
    JOIN  sanpham s ON s.id_sp= c.id_sanpham
    JOIN taikhoan tk ON c.id_user = tk.id
    WHERE c.id_user =
    ".$id;
    $list_hoadon= pdo_query($sql);
    return $list_hoadon;
}

function loadall_hoadon()
{
    $sql= "SELECT * FROM hoadon WHERE trangthai=0 order by id_hoadon desc";
    $list_hoadon= pdo_query($sql);
    return $list_hoadon;
}


 function loadall_dangxuly(){
    $sql= "SELECT * FROM hoadon WHERE xuly=0
       order by id_hoadon desc";

      $listxacnhan= pdo_query($sql);
      return  $listxacnhan; // trả về danh sách danh mục
  }

  function xacnhan_hoadon($id_hoadon){
    $sql= "UPDATE hoadon SET xuly= 1 WHERE id_hoadon=".$id_hoadon;
        pdo_execute($sql);

  }


function loadall_daxacnhan(){
   $sql= "SELECT * FROM hoadon WHERE xuly= 1  
      order by id_hoadon desc";

     $listhoantat= pdo_query($sql);
     return  $listhoantat; 
 }
 // đơn hàng giao xuly=2
 function giao_hoadon($id_hoadon){
    $sql= "UPDATE hoadon SET xuly= 2 WHERE id_hoadon=".$id_hoadon;
        pdo_execute($sql);

  }
  function loadall_danggiao(){
    $sql= "SELECT * FROM hoadon WHERE xuly= 2 
       order by id_hoadon desc";
 
      $listhoantat= pdo_query($sql);
      return  $listhoantat; 
  }
 // hoàn tất 
 function hoantat_hoadon($id_hoadon){
    $sql= "UPDATE hoadon SET xuly= 3 WHERE id_hoadon=".$id_hoadon;
        pdo_execute($sql);

  }
  function loadall_hoantat(){
    $sql= "SELECT * FROM hoadon WHERE xuly= 3
       order by id_hoadon desc";
 
      $listhoantat= pdo_query($sql);
      return  $listhoantat; 
  }
  // hủy đơn hàng 
   function huy_hoadon($id_hoadon){
    $sql= "UPDATE hoadon SET xuly= 4 WHERE id_hoadon=".$id_hoadon;
        pdo_execute($sql);

  }
  function loadall_huydon(){
     $sql= "SELECT * FROM hoadon WHERE xuly= 4 
      order by id_hoadon desc";

    $listhuydon= pdo_query($sql); 
     return  $listhuydon; // trả về danh sách danh mục
 }
 function load_hoadon_chitiet($ma_hd){
    $sql = "SELECT h.*, c.*, tk.*, s.*
    FROM hoadon h
    JOIN chitiethoadon c ON h.ma_hd = c.ma_dh
    JOIN sanpham s ON s.id_sp = c.id_sanpham
    JOIN taikhoan tk ON c.id_user = tk.id
    WHERE h.ma_hd = '$ma_hd'";
    $list_hoadon= pdo_query($sql);
    return $list_hoadon;
}

function loadhoadonchitiet($id_chitiethoadon){
    $sql = "SELECT chitiethoadon.*, sanpham.ten_sp, sanpham.anh_sp
            FROM chitiethoadon
            JOIN sanpham ON chitiethoadon.id_sanpham = sanpham.id_sp
            WHERE chitiethoadon.id_chitiethoadon =" .$id_chitiethoadon;


    $result = pdo_query_one($sql);

    return $result;
}

// load hóa đơn

function load_hoadon_hs($id, $xuly) {
    $sql = "SELECT hoadon.*, chitiethoadon.*
            FROM hoadon
            JOIN chitiethoadon ON chitiethoadon.ma_dh = hoadon.ma_hd
            WHERE hoadon.xuly = :xuly AND chitiethoadon.id_user = :id";

    $params = array(':id' => $id, ':xuly' => $xuly);

    $result = pdo_query($sql, $params);
    return $result;
}


// mã giảm giá

 function magiamgia($couponCode){
    $sql = "SELECT * FROM coupons WHERE code like '$couponCode'";
    $result = pdo_query($sql);
    return $result;
 }
?>