if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];

            echo "<h2>Multiplication Table for $number</h2>";
            echo "<table>";
            echo "<tr><th></th>";

            // Print column indexes
            for ($i = 1; $i <= $number; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Print table rows
            for ($i = 1; $i <= $number; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= $number; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }