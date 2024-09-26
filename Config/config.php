<?php 
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DB", "sava");

    $conn = new mysqli(HOST, USER, PASS, DB);

    define("HOSTADM", "localhost");
    define("USERADM", "root");
    define("PASSADM", "");
    define("DBADM", "sarton_servicos_adm");

    $connAdm = new mysqli(HOSTADM, USERADM, PASSADM, DBADM); 
    
?>