<?php
$sql = "DELETE FROM tb_menu WHERE id=$id";


   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $result = $stmt->fetchAll();


