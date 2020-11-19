<!DOCTYPE html>
<html>
<head>
    <title>Tabel Cursisten</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<table>
    <tr>
        <th>Cursistnr</th>
        <th>Naam</th>
        <th>Roepnaam</th>
        <th>Straat</th>
        <th>Postcode</th>
        <th>Plaats</th>
        <th>Geslacht</th>
        <th>Geboortedatum</th>
    </tr>
    <?php

    $conn = mysqli_connect("sql209.byetcluster.com", "unaux_26683842", "musicislife", "unaux_26683842_School");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cursist";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["cursistnr"]. "</td><td>" . $row["naam"] . "</td><td>"
                . $row["roepnaam"]. "</td><td>",$row["straat"]. "</td><td>",$row["postcode"]. "</td><td>"
                .$row["plaats"]. "</td><td>".$row["geslacht"]. "</td><td>".$row["geb_datum"]. "</td></tr>";
        }
        echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
</table>
</body>
</html>