<?php
$tootaal = 0;
$leerlingnummer = $_POST['leerlingnummer'];



$sql = "SELECT * FROM bestelingen where $leerlingnummer = leerlingnummer";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach($result as $key => $row) {
    echo "<br/>";
    $id_1 = $row['id'];
    $leerlingnummer = $row['leerlingnummer'];
    // include("bone.php");


// $user = $_POST['leerlingnummer'];
// $sql = "SELECT * FROM bestelingen_artikellen WHERE name='" . $user . "';";

$sql = "SELECT * FROM bestelingen_artikellen where $id_1 = bestelling_nummer";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach($result as $key => $row) {
    echo "<br/>";
    $bestelling_nummer = $row['bestelling_nummer'];
    $artikellen = $row['artikellen'];
    $aantal = $row['aantal'];
    // include("bone.php");



$sql = "SELECT * FROM tb_menu where $artikellen = id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach($result as $key => $row) {
    echo "<br/>";
    $id_2 = $row['id'];
    $titel = $row['titel'];
    $prijs = $row['prijs'];
    $img = $row['img'];
    

    // include("bone.php");

    $perstuk = $prijs;
    $prijs *=  $aantal;
    $tootaal +=  $prijs;





    include("bone.php");
}
}
}

    // echo "naam produckt:";
    // echo $titel; 
    // echo " aantal:";
    // echo $aantal;
    // echo " prijs:";
    // echo $prijs; 






// if($artikellen == $id_2);
// echo $titel;
// $prijs;
// $img;
// $aantal;

    // include("bone.php");



