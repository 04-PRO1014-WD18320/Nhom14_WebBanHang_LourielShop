<main class="catalog  mb ">

    <div class="boxleft">

      <div class="box_title">Quên Mật Khẩu</div>
      <div class="box_content form_account">
        <form action="index.php?act=quenmk" method="post">
          <div>
            <p>Email</p>
            <input type="email" name="email" placeholder="email">
          </div>


          <input type="submit" value="Gửi" name="guiemail">
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
