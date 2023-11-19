

<div class="boxright">


    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <?php
           
         if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
          ?>
         
         <div class="box_content2 product_portfolio">
      
          <h4>Xin chào :<?=$user?></h4><br>
           
          <li class="form_li" style="padding:7px 5px; "><a href="index.php?act=quenmk" style="color:red;">Quên mật khẩu</a></li>
          <li class="form_li" style="padding:7px 5px; "><a href="index.php?act=edit_taikhoan" style="color:red;">Cập nhập tài khoản</a></li>
          <?php if($role==1){?>

            <li class="form_li" style="padding:7px 5px; "><a href="admin/index.php" style="color:red;">Đăng Nhâp Admin</a></li>
        <?php }?>
            
          
          <li class="form_li" style="padding:7px 5px;"><a href="index.php?act=thoat" style="color:red;">Thoat</a></li>
      
         </div>
         <?php 
         }
         else{

         

        
        ?>

        <div class="box_content form_account">
            <form action="index.php?act=dangnhap" method="POST">
            <h4>Tên đăng nhập</h4><br>
            <input type="text" name="user" id="">
            <h4>Mật khẩu</h4><br>
            <input type="password" name="pass" id=""><br>
            <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
            <br><input type="submit" value="Đăng nhập" name= "dangnhap">
            </form>


            <br>

            <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            
        </div>
        <?php }?>

        
     </div>
     <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                      foreach($dsdm as $dm){
                          extract($dm);
                          $linkdm="index.php?act=sanpham&iddm=".$id;
                          echo '<li><a href="'.$linkdm.'">'.$name.' </a></li>';

                      }
                 ?>
                <!--                     <li><a href="">Đồng hồ </a></li>-->
                <!--                     <li><a href="">Laptop</a></li>-->
                <!--                     <li><a href="">Điện thoại</a></li>-->
                <!--                     <li><a href="">Ipad</a></li>-->
                <!--                     <li><a href="">Tivi</a></li>-->
            </ul>
        </div>
      

        <form action="index.php?act=sanpham" method="POST" id="kt">
            <input type="text" value="" name= "kyw">
            <input type="submit" value="Tìm" name ="timkiem">
           </form>

</div>
<div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
            <?php
            // load top 10 sản phẩm sắp xếp theo lượt xem 
                    foreach($dstop10 as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$img;
                        echo'<div class="selling_products" style="width:100%;">
                  <img src="'.$img.'" alt="anh">
                  <a href="'.$linksp.'">'.$name.'</a>
                </div>';
                    }
                    ?>
        </div>
</div>
</div>




