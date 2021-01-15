<?php

$sql = "INSERT INTO bestelingen (leerlingnummer) 
    VALUES ('$leerlingnummer')";


$stmt = $pdo->prepare($sql);
$stmt->execute();


// $result = $stmt->fetchAll();



$sql = "SELECT * FROM bestelingen";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
foreach($result as $key => $row) {
$id = $row['id'];
}
$artikellen = $_SESSION['lijst'];
$i = 0;
while ($i < count($artikellen)) {
   $sql = "INSERT INTO bestelingen_artikellen (bestelling_nummer, artikellen, aantal) 
    VALUES (%s,%s,%s)";
   $sql = sprintf($sql, $id,$artikellen[$i],$artikellen[$i + 1]);
   $i += 2;
   $stmt = $pdo->prepare($sql);
   $stmt->execute();


   
//    $result = $stmt->fetchAll();

}
// foreach($artikellen as $artikel){
//    $sql = "INSERT INTO bestelingen_artikellen (bestelling_nummer, artikellen, aantal) 
//     VALUES ('$id','$artikel',1)";
// }

// print_r($result);
// print_r($id);
