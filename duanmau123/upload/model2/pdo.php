<?php
// hàm chứa lệnh kết nối cơ sỡ dữ liệu
function pdo_get_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=duanmau2023", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}


// thực thi truy vấn sql bằng pdo
// đây là hàm thực thi một số câu lệnh sql ( insert , update, delete)
function pdo_execute($sql){
    $sql_args=array_slice(func_get_args(),1);// dòng này tạo một mảng
    // bằng cách lấy tất cả các đối số truyền vào

    try{
        // nội dung trong này dùng để bắt lỗi . bất kì lỗi nào xảy ra tong
        // khổi này sẽ được bắt bởi catch
        $conn=pdo_get_connection(); // để lấy một kết nối đến cơ sỡ dữ liệu PDO
        //đã được định nghĩa ở nơi khác để trả về một đối tượng PDO đang kết nối đến cơ sỡ dữ liệu

        $stmt=$conn->prepare($sql); // truy vân sql bằng cách sử dụng phương thức prepare của đối tượng kết nối PDO. 
        //Đối số truyền vào prepare là chuỗi SQL được truyền vào hàm.

        $stmt->execute($sql_args);
        //$stmt->execute($sql_args);: Thực thi truy vấn SQL đã được chuẩn bị bằng cách sử dụng phương thức execute
        // của đối tượng câu lệnh PDO ($stmt). Mảng $sql_args chứa các tham số được truyền vào truy vấn và sẽ được sử dụng để thay thế các placeholder trong câu truy vấn.
    }
    catch(PDOException $e){
        throw $e;

        //Bắt lỗi PDOException nếu có bất kỳ lỗi nào xảy ra trong quá trình thực thi truy vấn. Lỗi này được ném lên để xử lý tại nơi gọi hàm pdo_execute.
    }
    finally{
        unset($conn);
    }

    // Khối finally được sử dụng để đảm bảo rằng kết nối PDO sẽ được đóng sau khi truy vấn đã hoàn thành. Dòng unset($conn) sẽ hủy đối tượng kết nối PDO,
    // giải phóng tài nguyên và đóng kết nối.
}
// truy vấn nhiều dữ liệu (sel
function pdo_query($sql){
    $sql_args=array_slice(func_get_args(),1);

    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows=$stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
// truy vấn  1 dữ liệu (select)
function pdo_query_one($sql){
    $sql_args=array_slice(func_get_args(),1);
    try{
        $conn=pdo_get_connection();
        $stmt=$conn->prepare($sql);
        $stmt->execute($sql_args);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        // đọc và hiển thị giá trị trong danh sách trả về
        return $row;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
pdo_get_connection();
?>