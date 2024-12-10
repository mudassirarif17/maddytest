<?php
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM categories WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Category deleted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}
?>
<form method="POST">
    <label>Category ID to Delete:</label>
    <input type="text" name="id" required>
    <button type="submit" name="delete">Delete</button>
</form>
