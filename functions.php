<?php
session_start();
include 'information.php';

function displayElectronics() {
            $sql = "SELECT electronicsName FROM electronics";
            $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo "<div id='original'>";
                    while ($row = $result->fetch_assoc()) {
                        echo $row["electronicsName"]. "<br>";
                        "<br>";
                    }
                    echo "</div>";
                } else {
                    echo "0 results";
                }
                // $conn->close();
            // }
}


?>