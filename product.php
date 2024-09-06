<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <?php
    // Include the PHP file with database connection and retrieval logic
    include('database_connection.php'); // Replace with the actual file name

    // Display product data using HTML
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Price</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["product_id"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["product_price"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No products found.";
    }
    ?>
</body>
</html>
