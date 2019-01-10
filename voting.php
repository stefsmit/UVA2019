<?php
require "nav.php";
require "database.php";
$sql = "SELECT * FROM DATA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='images'><table><tr><td>" . $row["Model"]. "</td></tr><tr><td><img src=" . $row["Image"]. "></td></tr><tr><td>Likes: " . $row["Likes"]. "</td><td><input type='button' value='Like'></td></tr></table></div><hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>