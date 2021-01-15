<?php

$sql = "SELECT * FROM tb_menu_nl";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
foreach($result as $key => $row) {
    echo "<br/>";
    $titel = $row['titel'];
    $prijs = $row['prijs'];
    $img = $row['img'];
    $id = $row['id'];
    include("template.php");

}