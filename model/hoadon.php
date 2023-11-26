<?php
// function insert_hoadon($ma_dh , $mota_dh,$ngaydatdon){
//     $sql= "INSERT INTO hoadon (ma_dh, mota_dh) VALUES ('$ma_dh' , '$mota_dh','$ngaydatdon')";
//     pdo_execute($sql);
// }
// function loadall_hoadon(){
//     $sql= "SELECT * FROM hoadon WHERE trangthai= 0  
//      order by id_hoadon desc";

//     $listdanhmuc= pdo_query($sql);
//     return  $listdanhmuc; // trả về danh sách danh mục
// }

function insert_chitethoadon($ma_dh,$mota_dh,$ngaydatdon,$noinhan_cthd,$chuthich_cthd,$xuli_dh,$in_dh){
    $sql= "INSERT INTO chitethoadon (ma_dh,mota_dh,ngaydatdon,noinhan_cthd,chuthich_cthd,xuli_dh,in_dh) 
    VALUES ('$ma_dh',' $mota_dh','$ngaydatdon'.'$noinhan_cthd','$chuthich_cthd','$xuli_dh','$in_dh')";
    pdo_execute($sql);
}
function loadall_chitiethoadon($id_hoadon){
    $sql= "SELECT hoadon.id_hoadon, hoadon.ma_hd, hoadon.mota_dh, hoadon.ngaydatdon, hoadon.trangthai, hoadon.xuly,
    chitethoadon.id_cthd, chitethoadon.ma_dh AS ma_dh_cthd, chitethoadon.mota_dh AS mota_cthd, chitethoadon.ngaydatdon AS ngaydatdon_cthd,
    chitethoadon.noinhan_cthd, chitethoadon.chuthich_cthd, chitethoadon.xuli_dh, chitethoadon.in_dh
  FROM hoadon
 JOIN chitethoadon ON hoadon.id_hoadon = chitethoadon.id_hoadon
 WHERE hoadon.id_hoadon=".$id_hoadon;

    $chitiethoadon= pdo_query($sql);
    return  $chitiethoadon; 
}
function insert_hoadon($ma_dh , $mota_dh,$ngaydatdon,$xuly){
    $sql= "INSERT INTO hoadon (ma_dh, mota_dh, xuly) VALUES ('$ma_dh' , '$mota_dh','$ngaydatdon', $xuly)";
    pdo_execute($sql);
}


function loadall_hoadon(){
    $sql= "SELECT hoadon.*, taikhoan.ten ,taikhoan.diachi,taikhoan.email,taikhoan.sodienthoai
    FROM hoadon
    JOIN taikhoan ON hoadon.id = taikhoan.id;";

    $listdanhmuc= pdo_query($sql);
    return  $listdanhmuc; // trả về danh sách danh mục
}

 function loadall_dangxuly(){
    $sql= "SELECT * FROM hoadon WHERE xuly=0
       order by id_hoadon desc";

      $listxacnhan= pdo_query($sql);
      return  $listxacnhan; // trả về danh sách danh mục
  }


function loadall_hoantat(){
   $sql= "SELECT * FROM hoadon WHERE xuly= 1  
      order by id_hoadon desc";

     $listhoantat= pdo_query($sql);
     return  $listhoantat; // trả về danh sách danh mục
 }
 
  function loadall_huydon(){
     $sql= "SELECT * FROM hoadon WHERE xuly= 2 
      order by id_hoadon desc";

    $listhuydon= pdo_query($sql); 
     return  $listhuydon; // trả về danh sách danh mục
 }


// function delete_xacnhan($id_hoadon){
//     $sql= "DELETE from hoadon where id_hoadon=".$id_hoadon;
//     pdo_execute($sql);
// }

// function loadall_hoantat_thungrac(){
//     $sql= "SELECT * FROM hoadon WHERE xuly= 2 
//      order by id_hoadon desc";

//     $listhoantat= pdo_query($sql);
//     return  $listhoantat; // trả về danh sách danh mục
// }
// function loadall_huydon_thungrac(){
//     $sql= "SELECT * FROM hoadon WHERE trangthai= 3 
//      order by id_hoadon desc";

//     $listhoantat= pdo_query($sql);
//     return  $listhoantat; // trả về danh sách danh mục
// }

// //1 là chuyển vào hoàn tất
// function xacnhan_tam($id_hoadon){
//     $sql= "UPDATE hoadon SET xuly= 2 WHERE id_hoadon=".$id_hoadon;
//     pdo_execute($sql);
// }
?>