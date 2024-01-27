<?php
// Include the database connection file
include 'conexiune.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $img = $_POST["img"];

    // Update data in the products table
    $sql = "UPDATE products SET name='$name', img='$img' WHERE id=$id";

    if ($conexiune->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Product updated successfully</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error updating product: ' . $conexiune->error . '</div>';
    }
} else {
    // Fetch the product details for the given ID
    $id = $_GET["id"];
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $conexiune->query($sql);
    $row = $result->fetch_assoc();
}

$conexiune->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Update Product</title>
</head>
<body>

<div class="container mt-5">
    <h2>Update Product</h2>

    <!-- Product Form -->
    <form method="POST">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        </div>
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="img">Image Name:</label>
            <input type="text" class="form-control" id="img" name="img" value="<?php echo $row['img']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
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
