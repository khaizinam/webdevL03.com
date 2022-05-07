<?php
    if($numProduct > $limit){
?>
            <ul>
            <?php
                for ($i = $start; $i <= $end; $i++) { 
                    if($i == $page){
                        ?><li> <a class="pagination-show pagin-active" href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a></li><?php
                    }else{
                        ?><li> <a class="pagination-show" href="index.php?page=<?php echo $i;?>"><?php echo $i;?></a></li><?php
                    }
                }
            ?>
            </ul>
<?php
    }
?>