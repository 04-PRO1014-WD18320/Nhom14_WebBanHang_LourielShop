<?php

// vì phần danh mục sẽ trả về mảng nên dùng is_array()

if(is_array($dm)){
  extract($dm);
}

?>
</header>
        <div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬP LOẠI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã loại </label> <br>
            <input type="text" name="maloai" placeholder="nhập vào mã loại" value="">
           </div>
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tenloai" placeholder="nhập vào tên" value="<?php if(isset($name) && ($name !="")){ echo $name;}?>">
           </div>
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?php if(isset($id) && ($id >0)){ echo $id;}?>"> <!-- lưu lại ib không hiện trên from-->
         <input class="mr20" type="submit" value="Cập Nhập" name="capnhap">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php 
           if(isset($thongbao) && ($thongbao !="")){
            echo $thongbao;
           }
           ?>
          </form>
         </div>
        </div>
 
     <!-- END HEADER -->

       
    </div     