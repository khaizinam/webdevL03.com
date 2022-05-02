<?php
    include "../../../config/config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli(HOSTNAME, USERTNAME, PASS, DATABASEBNAME);

    $sql = "INSERT INTO `user` (`username`,`password`,`type`) VALUES ('$username','$password',1)";
    $result = $conn->query($sql);
    if ($result){
        echo '<script>
                location.href = "../../login/login.html";
            </script>
            ;';
    }
?>