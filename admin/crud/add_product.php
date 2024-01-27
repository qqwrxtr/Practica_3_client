<?php
// Include the database connection file
include 'conexiune.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $img = "/revenco/img/" . $_POST["img"]; // Add the prefix to the img

    // Insert data into the products table
    $sql = "INSERT INTO products (name, img) VALUES ('$name', '$img')";

    if ($conexiune->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Product created successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conexiune->error . '</div>';
    }
}

$conexiune->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Create Product</title>
</head>
<body>

<div class="container mt-5">
    <h2>Create Product</h2>

    <!-- Product Form -->
    <form method="POST">
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="img">Image Name:</label>
            <input type="text" class="form-control" id="img" name="img" required>
            <small class="form-text text-muted">Imaginea automat va primi  "/revenco/img/" inainte de ce e mai sus</small>
        </div>
        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>

    <!-- Button to go back to index.php -->
    <a href="../index.php" class="btn btn-secondary mt-3">Go Back to Products</a>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>
</html>
