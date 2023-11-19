<?php
function loadall_taikhoan(){
    $sql= "SELECT * FROM taikhoan order by id desc";

    $listtaikhoan= pdo_query($sql);
    return  $listtaikhoan; // trả về danh sách danh mục
}

function insert_taikhoan($user,$pass,$email){
    $sql =" INSERT INTO  taikhoan (user,pass,email) VALUE ('$user', '$pass','$email')";

    pdo_execute($sql);
}


function checkuser($user,$pass){
    $sql= " select * from taikhoan where user='".$user."' and pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function checkemail($email){
    $sql= " select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id,$user, $pass, $email, $address, $tel){
   $sql= "UPDATE taikhoan SET user='".$user."', pass='".$pass."', address='".$address."', tel='".$tel."' WHERE id=".$id;
    
  
    pdo_execute($sql);
}
function delete_taikhoan($id) {
    // Trước tiên, xóa tất cả các bình luận của tài khoản
    $sql_delete_binhluan = "DELETE FROM binhluan WHERE iduser = $id";
    pdo_execute($sql_delete_binhluan);
    
    // Sau đó, xóa tài khoản từ bảng taikhoan
    $sql_delete_taikhoan = "DELETE FROM taikhoan WHERE id = $id";
    pdo_execute($sql_delete_taikhoan);
}

?>