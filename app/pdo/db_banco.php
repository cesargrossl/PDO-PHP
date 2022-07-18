<?php
    if($db_valida == 'srv_portal'){
        define('DB_NAME_PORTAL',"db_pdo");
        define('DB_HOST_PORTAL',"mysql");
        define('DB_USER_PORTAL',$_ENV['MYSQL_USER']);
        define('DB_PASSWD_PORTAL',$_ENV['MYSQL_PASS']);
    }
?>