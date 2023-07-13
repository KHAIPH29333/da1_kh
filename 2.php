<?php
session_start();
if(isset($_SESSION['mycart'])){
    foreach ($_SESSION['mycart'] as $cart){
        echo "mã sp: ".$cart[0];
        echo "tên sp: ".$cart[1];
        echo "giá sp: ".$cart[2];
        echo "số lượng: ".$cart[3]."br";
    }echo '<h1>session đã show</h1>';
}else{
    echo '<h1>session đã hủy</h1>';
}
echo '<a href="2.php">Khởi tạo</a>';
echo '<a href="3.php">Hủy session</a>';
?>