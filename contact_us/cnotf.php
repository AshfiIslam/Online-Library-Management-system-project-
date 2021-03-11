<?php
    include 'db.php';
    $cd = '1';
    $hack = $dbcon->query("select count(*) from feedback WHERE notr= $cd")->fetchColumn();
    echo"".$hack;
    ?>