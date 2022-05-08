
                <?php 
                $query_get_cate = "SELECT * FROM cate";
                $test_num_cate = $db->num($query_get_cate);
                if($test_num_cate != 0){
                    ?>
                    <div class="component-wrapper-1">
                        <h3 id="h3-1" class="center"><?php
                            if($cate != "all"){
                                echo $row_cate['name'];
                            }else ECHO "TRANG CHỦ";
                        ?></h3> 
                    </div> 
                <?php
                }
                ?>                






