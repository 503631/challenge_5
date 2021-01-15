<?php

$sql = "SELECT * FROM snoepgoed";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach($result as $key => $row) {
    echo "<br/>";
    $titel = $row['titel'];
    $prijs = $row['prijs'];
    $img = $row['img'];
    include("template.php");

}