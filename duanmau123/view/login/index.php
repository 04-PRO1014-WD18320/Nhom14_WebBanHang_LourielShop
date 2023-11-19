<main class="catalog  mb ">

    <div class="boxleft">

      <div class="box_title">Đăng ký thành viên</div>
      <div class="box_content form_account">
        <form action="index.php?act=dangky" method="post">
          <div>
          <div>
            Tên đăng nhập
            <input type="text" name="user"  placeholder="user">
          </div>
          Mật khẩu
          <div>
            <input type="password" name="pass"  placeholder="pass">
          </div>
            <p>Email</p>
            <input type="email" name="email" placeholder="email">
          </div>


          <input type="submit" value="Đăng ký" name="dangky">
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
