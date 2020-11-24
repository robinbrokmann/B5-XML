<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eindopdracht XML</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Personen</h1>
<table>
    <tr>
        <th id="voornaam">Voornaam</th>
        <th id="achternaam">Achternaam</th>
        <th id="geslacht">Geslacht</th>
        <th id="haarkleur">Haarkleur</th>
        <th id="lengte">Lengte</th>
    </tr>
    <?php @$xml=simplexml_load_file("personen.xml" ) or die("Error: Kan personen niet lezen" );foreach($xml->children() as $persoon) {

        echo "<tr>";
        echo "<td>" . $persoon->voornaam . "</td>";
        echo "<td>" . $persoon->achternaam . "</td>";
        echo "<td>" . $persoon->geslacht . "</td>";
        echo "<td>" . $persoon->haarkleur . "</td>";
        echo "<td>" . $persoon->lengte . "</td>";
        echo "</tr>";
    }
    ?>
</table><br>
<div class='buttons'>
    <button onclick="window.location.href='personen.xml'">XML bekijken</button>
</div>
</body>
</html>
