<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $tender_code = $_POST['tender_code'];
    $tender_name = $_POST['tender_name'];
    $tender_type = $_POST['tender_type'];
    $tender_description = $_POST['tender_description'];
    $tender_amount = $_POST['tender_amount'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Prepare tender data as text
    $tender_data = "
Tender Code: $tender_code
Tender Name: $tender_name
Tender Type: $tender_type
Tender Description: $tender_description
Tender Amount: $tender_amount
Tender Starting Date: $start_date
Tender Ending Date: $end_date
===============================
";

    // Save the data to a text file
    $file = 'tenders.txt';  // This file will store all tender information

    // Open the file to append the data
    $file_handle = fopen($file, 'a'); // 'a' mode means append
    if ($file_handle) {
        fwrite($file_handle, $tender_data);  // Write the tender data
        fclose($file_handle);  // Close the file
        echo "<script>alert('Tender saved successfully!'); window.location.href = 'index.html';</script>";
    } else {
        echo "Error: Unable to save tender data.";
    }
}
?>
