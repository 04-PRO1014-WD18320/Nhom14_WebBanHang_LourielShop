<?php
session_start();

$idpro=$_REQUEST['idpro'];

include "../../model/pdo.php";
include "../../model/binhluan.php";
$dsbl=loadall_binhluan($idpro);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="mb">
        <div class="box_title">Bình Luận</div>
        <div class="box_content2 product_portfolio">

        <table>
        <?php
                       foreach($dsbl as $bl){
                           extract($bl);
                        echo '
                        <tr>
                        <td>'.$noidung.'</td>
                        <td>'.$user.'</td>
                        <td>'.$ngaybinhluan.'</td> 
                        </tr> 
                        ';

                      }
                   
                 ?>
        </table>

                  
            
        </div>
      

        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" id="kt">
            
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <input type="text" value="" name= "noidung">
            <input type="submit" value="Gủi Bình luận" name ="guibinhluan">
        </form>
        <?php
        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
            $noidung= $_POST['noidung'];
            $idpro= $_POST['idpro'];
            $iduser=$_SESSION['user']['id'];
            $ngaybinhluan=date("h:i:sa /d/m/Y");
            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
            header("Location:".$_SERVER['HTTP_REFERER']);

        }
        ?>

</div>
</body>
</html>