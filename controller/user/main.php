<?php
    /////////////////////////////////////////////
    include  "include/header.php";
    include "../../config/config.php";
    include "include/conn.php";
    ///////////////////////////////////////
    $db = new DataBase();
    $sql = "SELECT token FROM data";
    $result = $db->send($sql);
?>
    <div id="test" class="container">
       <h1>TEST</h1>
        <?php 
        while($row = $result->fetch_assoc()){
            echo $row['token'].'<br>';
        }
        ?>
    </div>
<?php
    include  "include/footer.php";
?>