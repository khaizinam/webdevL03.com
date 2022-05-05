        <div class="component-wrapper-1">
            <h3 id="h3-1" class="center">DANH MỤC SẢN PHẨM</h3>
            <div id="title-popular" class="center menu-1">
                <?php 
                $query = "SELECT * FROM popular ORDER BY num ASC";
                $sql = $db->send($query);
                while($rows = $sql->fetch_array()){
                    ?>
                    <a  href="<?php echo $rows['href']; ?>"><?php echo  $rows['name']; ?></a>
                <?php
                }
                ?>
            </div>
        </div>



