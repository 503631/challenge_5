<?php

$sql = "SELECT * FROM tb_menu";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach($result as $key => $row) {
    echo "<br/>";
    $id = $row['id'];
    $titel = $row['titel'];
    $prijs = $row['prijs'];
    $img = $row['img'];
    include("template.php");

}