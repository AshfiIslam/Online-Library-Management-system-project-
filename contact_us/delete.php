<?php
    include'db.php';
	$stmt=$dbcon->prepare("UPDATE `feedback` SET `notr` = '' WHERE `feedback`.`id` = id");
	$stmt->execute();
      
    ?>