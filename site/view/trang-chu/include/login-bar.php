            <div id="header-2-top" class="d-flex">
                <?php if(!isset($_COOKIE['user-id'])){
                   ?><a id="user" href="../login/">Đăng nhập</a><?php
                }else{
                    ?><a id="user" href="../info/">Tài khoản</a>
                    <a id="" href="../login/login.html?action=logout">Đăng xuất</a><?php
                }?>
            </div>