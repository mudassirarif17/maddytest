<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $parent_id = $_POST['parent_id'] ?: NULL;

    $stmt = $conn->prepare("UPDATE categories SET name = ?, parent_id = ? WHERE id = ?");
    $stmt->bind_param("sii", $name, $parent_id, $id);
    if ($stmt->execute()) {
        echo "Category updated successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}
?>
<form method="POST">
    <label>Category ID:</label>
    <input type="text" name="id" required>
    <label>Category Name:</label>
    <input type="text" name="name" required>
    <label>Parent Category:</label>
    <select name="parent_id">
        <option value="">None</option>
        <?php
        $result = $conn->query("SELECT * FROM categories WHERE parent_id IS NULL");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['name']}</option>";
        }
        ?>
    </select>
    <button type="submit" name="update">Update</button>
</form>
