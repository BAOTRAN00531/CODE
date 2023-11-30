<?php
include("dao/sanpham.php"); // Include your file with database functions

// Check if the search parameter is set
if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Call your function to get search results
    $searchResults = sanphamselectall($searchTerm, 0); // Assuming 0 for $iddm means no category filter

    // Display search results
    if (!empty($searchResults)) {
        foreach ($searchResults as $sp) {
            // Display your search results as needed
            // file deepcode ignore XSS: <please specify a reason of ignoring this>
            echo '<p>' . $sp['TENSP'] . '</p>';
        }
    } else {
        echo 'Không tìm thấy kết quả.';
    }
}
?>
