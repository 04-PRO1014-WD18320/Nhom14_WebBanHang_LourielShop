

<main class="catalog  mb ">

    <div class="boxleft">

      <div class="box_title">Cập Nhập Tài Khoản </div>
      <div class="box_content form_account">
        <?php 
            if(isset($_SESSION['user'])&& is_array($_SESSION['user'])){
              extract($_SESSION['user']);
            }
        ?>
        <form action="index.php?act=edit_taikhoan" method="post">
          <div>
          <div>
            Tên đăng nhập
            <input type="text" name="user"  placeholder="user" value="<?=$user?>">
          </div>
          
          <div>
          Mật khẩu
            <input type="password" name="pass"  placeholder="pass" value="<?=$pass?>">
          </div>
            <p>Email</p>
            <input type="email" name="email" placeholder="email" value="<?=$email?>">
          </div>
          <div>
          Địa chỉ
            <input type="text" name="address"  placeholder="địa chỉ" value="<?=$address?>">
          </div>
          <div>
          Điện Thoại
            <input type="text" name="tel"  placeholder="điện thoại" value="<?=$tel?>">
          </div>

          <input type="hidden" name="id" value="<?=$id?>">
          <input type="submit" value="Cập Nhập" name="capnhap">
          <input type="reset" value="Nhập lại">
        </form>
            <h4 style="color:red;">       <?php
                    if(isset($thongbao) && $thongbao !=""){
                        echo "$thongbao";
                    }
        ?></h4>
      </div>

    </div>
    <?php
    include "view/boxright.php";
    ?>
  </main>
