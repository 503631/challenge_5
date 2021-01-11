<?php
$sql_from_bestellingen = "SELECT * FROM bestelingen";
$stmt = $pdo->prepare($sql_from_bestellingen);
$stmt->execute();
$bestellingen = $stmt->fetchAll();
foreach ($bestellingen as $key => $row) {
    echo "<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th{
        background-color: gray;
    }
    .order{
        margin: 5px;
        border: 1px;
        background-color: lightgray;
    }
    </style>";
    echo "<div class=\"order\">";
    $id_1 = $row['id'];
    $leerlingnummer = $row['leerlingnummer'];
    echo "Leerling:$leerlingnummer<br />bestelling:$id_1";
    $sql_get_bestelling = "SELECT * FROM bestelingen_artikellen where $id_1 = bestelling_nummer";
    $stmt = $pdo->prepare($sql_get_bestelling);
    $stmt->execute();
    $bestelling_van_leerling = $stmt->fetchAll();
    $totaal_prijs = 0;
    $totaal_aantal = 0;
    echo "<table>";
    echo "<tr>";
    echo "<th>Artikel</th>";
    echo "<th>Aantal</th>";
    echo "<th>Prijs</th>";
    echo "</tr>";
    foreach ($bestelling_van_leerling as $key => $row) {
        echo "<tr>";
        $artikellen = $row['artikellen'];
        $aantal = $row['aantal'];
        $sql_get_artikel = "SELECT * FROM tb_menu where $artikellen = id";
        $stmt = $pdo->prepare($sql_get_artikel);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        foreach ($result as $key => $row) {
            $titel = $row['titel'];
            $prijs = $row['prijs'];
            echo "<td>$titel</td>";
            echo "<td>$aantal</td>";
            echo "<td>€$prijs</td>";
            $totaal_prijs += $prijs * $aantal;
            $totaal_aantal += $aantal;
        }
        echo "</tr>";
    }
    echo "<tr>";
    echo "<th>Totaal aantal en prijs:</th>";
    echo "<th>$totaal_aantal</th>";
    echo "<th>€$totaal_prijs</th>";
    echo "</tr>";
    echo "</table>";
    echo "</div>";
}
