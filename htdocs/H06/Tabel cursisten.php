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

    $conn = mysqli_connect("sql105.unaux.com", "unaux_27261461", "Experience", "unaux_27261461_school");
    // Check connection
    if (!$conn) {
        echo "Connection Error \n". mysqli_connect_error();
    }
    $sql = "SELECT * FROM cursisten";
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