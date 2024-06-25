<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "webDB";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Вывод изображений в виде галереи
    while($row = $result->fetch_assoc()) {
        echo '<a href="' . $row["filepath"] . '" target="_blank">';
        echo '<img src="' . $row["filepath"] . '" alt="' . $row["filename"] . '">';
        echo '</a>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>
