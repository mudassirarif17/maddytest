<?php
include('./connection.php');

// Read the JSON input
$data = json_decode(file_get_contents("php://input"), true);

$childId = $data['childId'];
$newParentId = $data['newParentId'];

// Validate input
if ($childId && is_numeric($childId)) {
    // Set p_id to NULL if newParentId is 'NULL', else update with newParentId
    $newParentId = $newParentId === 'NULL' ? 'NULL' : (int)$newParentId;

    $query = "UPDATE categories SET p_id = $newParentId WHERE id = $childId";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => mysqli_error($con)]);
    }
} else {
    echo json_encode(["success" => false, "error" => "Invalid input"]);
}
?>
