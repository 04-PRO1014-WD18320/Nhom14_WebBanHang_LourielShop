<?php
// controler
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";

if(isset($_GET['act']) && ($_GET['act'] !="")){
    $act= $_GET['act'];
    switch($act){
        case 'adddm':
            // kiểm tra xem người dùng có nhấn vào act hay không
            if(isset($_POST['themmoi']) &&($_POST['themmoi'])){
            $tenloai=$_POST['tenloai'];
            insert_danhmuc($tenloai);
                    $thongbao= "Thêm thành công";
                    
            }
                include "danhmuc/add.php";
        break;

        case 'listdm':
       $listdanhmuc= loadall_danhmuc();
            include "danhmuc/list.php";
        break;

        case 'xoadm':
            
            if(isset($_GET['id']) && ($_GET['id'] >0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
        

        break;

        case 'suadm':
            if(isset($_GET['id']) && ($_GET['id'] >0)){
              
                $dm=loadone_danhmuc($_GET['id']);
            }   
        include "danhmuc/update.php";

        break;

        case 'updatedm':
            if(isset($_POST['capnhap']) &&($_POST['capnhap'])){
                $tenloai=$_POST['tenloai'];
                $id= $_POST['id'];
                update_danhmuc($id, $tenloai);
                        $thongbao= "Cập nhập  thành công";
                        
                }
            $sql= "SELECT * FROM danhmuc order by id desc";

            $listdanhmuc=pdo_query($sql);
            include "danhmuc/list.php";
        break;


        // controler sản phẩm
        case 'addsp':
            // kiểm tra xem người dùng có nhấn vào act hay không
            if(isset($_POST['themmoi']) &&($_POST['themmoi'])){
            $iddm=$_POST['iddm'];
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            $mota=$_POST['mota'];
            $filename= $_FILES["hinh"]["name"];
            $target_dir= "../upload/";
            $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
               // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
              } else {
                //echo "Sorry, there was an error uploading your file.";
              }
            insert_sanpham($tensp ,$giasp ,$filename ,$mota, $iddm);
                    $thongbao= "Thêm thành công";
                    
            }
            $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                 break;

        case 'listsp':
            if(isset($_POST['listok']) &&($_POST['listok'])){
                $kyw= $_POST['kyw'];
                $iddm=$_POST['iddm'];

            }else{
                $kyw='';
                $iddm=0;

            }
             $listdanhmuc=loadall_danhmuc();
             $listsanpham= loadall_sanpham($kyw,$iddm);
             include "sanpham/list.php";
        break;

        case 'xoasp':
            
            if(isset($_GET['id']) && ($_GET['id'] >0)){
                delete_sanpham($_GET['id']);
            }
            $listsanpham=loadall_sanpham("" ,0);
            include "sanpham/list.php";
        

        break;
        case "xoaspmen": 
            if(isset($_GET['id']) && ($_GET['id'] >0)){
                xoamen_sanpham($_GET['id']);  
            }
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham("" ,0);
            include "sanpham/list.php";
        case 'suasp':

            if(isset($_GET['id']) && ($_GET['id'] >0)){
              
                $sanpham=loadone_sanpham($_GET['id']);
            }   
            $listdanhmuc=loadall_danhmuc();
             include "sanpham/update.php";

        break;

        case 'updatesp':
            if(isset($_POST['capnhap']) &&($_POST['capnhap'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $filename= $_FILES["hinh"]["name"];
                $target_dir= "../upload/";
                $target_file= $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                   // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                    //echo "Sorry, there was an error uploading your file.";
                  }
                 update_sanpham($id,$iddm, $tensp, $giasp, $mota, $filename);
                        $thongbao= "Cập nhập  thành công";
                        
                }
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham();
        
            include "sanpham/list.php";
            break;

            case "dskh":
                $listdanhmuc= loadall_taikhoan();
                include "taikhoan/list.php";
            break;
            case "xoakh":
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_taikhoan($_GET['id']);
                }
                $listdanhmuc= loadall_taikhoan();
                include "taikhoan/list.php";
            case "dsbl":
                $listbinhluan=loadall_binhluan_home();
                include "binhluan/list.php";
            break;
            case "xoabl":
                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan=loadall_binhluan_home();
                include "binhluan/list.php";
                case 'thongke':
                    $listthongke = loadall_thongke();
                    include "thongke/list.php";
                    break;
                case 'bieudo':
                    $listthongke = loadall_thongke();
                    include "thongke/bieudo.php";
                    break;

        default:
        include "home.php";
        break;
    }
}else{
    include "home.php";
}



include "footer.php";

?>