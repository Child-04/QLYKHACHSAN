<?php
file_put_contents("debug.txt", print_r($_POST, true));

    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['get_general']))
{
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    error_log(var_export($data, true));
    $json_data = json_encode($data);
    echo $json_data;
}

?>