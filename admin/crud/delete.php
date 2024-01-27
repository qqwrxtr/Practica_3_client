<?php
include("conexiune.php");

if ($conexiune->connect_error) {
    die("Connection failed: " . $conexiune->connect_error);
}

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the DELETE query
    $sql = "DELETE FROM `products` WHERE `id` = ?";
    $stmt = $conexiune->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // Check if the query was successful
        if ($stmt->affected_rows > 0) {
            header('Location: ../index.php');
            exit();
        } else {
            echo "Error deleting product.";
        }

        $stmt->close();
    } else {
        echo "Error preparing DELETE statement.";
    }
} else {
    echo "Invalid request. Please provide a valid product ID.";
}

$conexiune->close();
?>
