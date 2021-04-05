<?php

include_once 'delete.php';

$sql = "DELETE FROM student WHERE Name='" . $_GET["Name"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>