<?php

 session_start();

 if (!isset($_SESSION['cart'])) {
   $_SESSION['cart'] = array();
}
if(isset($_GET["delcart"]) && $_GET["delcart"] ==1){
   unset($_SESSION['cart']);
}
 include "model/pdo.php";
 include "model/taikhoan.php";
 
 include "model/danhmuc.php";
 include "model/sanpham.php";
 $list_thinhhanh=loadall_sanpham_thinhhanh() ;
 $list_dm=loadall_danhmuc();
 $list_sp_danhsach=loadall_sanpham_dm($kyw="",$id_dm="");
 $list_sp_home=loadall_sanpham_home() ;
 $dstop10 = loadall_sanpham_top10();
 include "views/header.php"; 
 if(isset($_GET['act']) && ($_GET['act'] !="")){
    $act= $_GET['act'];
    switch($act){


      case 'timkiemsanpham':
         if (isset($_GET['kyw']) && !empty($_GET['kyw'])) {
            $kyw = $_GET['kyw'];
        }
       
         $dssp = loadall_sanpham_dm($kyw= '');
         include 'views/sanpham/list.php';
     
         break;

      case 'sanpham':
         $list_dm = loadall_danhmuc();
         $ten_dm = load_ten_dm($id_dm);
         if (!isset($_GET['id_dm'])) {
            $id_dm = 0;
         } else {
            $id_dm = $_GET['id_dm'];
         }
         $dssp = loadall_sanpham_dm("", $id_dm);
         include 'views/sanpham/list.php';

         break;
      case "chitietsanpham":
         if(isset($_GET["id_sp"]) && $_GET["id_sp"] != ""){
         $id_sp= $_GET["id_sp"];
         $sanphamchitiet=sanpham_chitietsanpham($id_sp);
         loadone_sanpham_luotxem($id_sp);
         
         }
         include "views/sanpham/chitietsanpham.php";
      break;

        case 'giohang':  
        include 'views/sanpham/giohang.php';
        break;

         case 'updategiohang':
         include 'views/sanpham/giohang/update.php';
         break;


         
     
        case 'checkout':

         include "views/sanpham/checkout.php";
        break;

        case "dathang":

        break;
        
        case 'hoso':
         include 'views/hoso/index.php';
         break;
        case "capnhathoso":
         if(isset($_POST["luuthaydoi"]) && $_POST["luuthaydoi"] !==""){
            $ten= $_POST["ten"];
            $email= $_POST['email'];
            $diachi= $_POST['diachi'];
            $sodienthoai= $_POST['sodienthoai'];
            $matkhau=$_POST['matkhau'];
            $matkhaumoi= $_POST['matkhaumoi'];
            $nhaplaimatkhaumoi= $_POST['nhaplaimatkhaumoi'];
            $chucvu=0;
           $id= $_SESSION['user']['id'];
            if(($_SESSION['user']['matkhau'] ==$matkhau) && ($matkhaumoi ==$nhaplaimatkhaumoi)){
               update_taikhoan_user($id, $ten,$matkhaumoi ,$email, $diachi, $sodienthoai);
            }else{
               $matkhau=$_SESSION['user']['matkhau'];
               update_taikhoan_user($id, $ten,$matkhau ,$email, $diachi, $sodienthoai);
               
            }
         }
         include 'views/hoso/index.php';
         break;

         case 'yeuthich':

         include 'views/sanpham/wishlist.php';

         break;
           
    }
 }
 else{
 include "views/home.php";
 }
include "views/footer.php";




?>