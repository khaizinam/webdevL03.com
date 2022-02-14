<?php
    /////////////////////////////////////////////
    include  "../public/header/header.php";
    include "../config/config.php";
    include "../public/header/conn.php";//goi ket noi db
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
    include  "../public/header/footer.php";
?>