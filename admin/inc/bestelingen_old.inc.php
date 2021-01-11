<?php
$sql = "SELECT * FROM bestelingen";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
$alls = 0;
foreach ($result as $key => $row) {
    echo "<br/>";
    $id_1 = $row['id'];
    $leerlingnummer = $row['leerlingnummer'];
    $sql = "SELECT * FROM bestelingen_artikellen where $id_1 = bestelling_nummer";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); // get result
    foreach ($result as $key => $row) {
        echo "<br/>";
        $bestelling_nummer = $row['bestelling_nummer'];
        $artikellen = $row['artikellen'];
        $aantal = $row['aantal'];
        $sql = "SELECT * FROM tb_menu where $artikellen = id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        foreach ($result as $key => $row) {
            echo "<br/>";
            $titel = $row['titel'];
            $prijs = $row['prijs'];
            $totaal = $prijs * $aantal;
            $alls += $totaal;
            
            include("bestelingenzien1.inc.php");
            include("bestelingenzien2.inc.php");
            $alls += $totaal;
        }
    }
}
