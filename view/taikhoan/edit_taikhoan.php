<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);

                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                   <div class="row mb10">Email<br><input type="email" name="email" value="<?=$email?>"></div>
                    <div class="row mb10">Tên đăng nhập<br><input type="text" value="<?=$user?>" name="user"></div>
                    <div class="row mb10">Mật khẩu<br><input type="password" value="<?=$pass?>" name="pass"></div>
                    <div class="row mb10">Địa chỉ<br><input type="text" value="<?=$address?>" name="address"></div>
                    <div class="row mb10">Điện thoại<br><input type="text" value="<?=$tel?>" name="tel"></div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" name="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php";  ?>
    </div>
</div>