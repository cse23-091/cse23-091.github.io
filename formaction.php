<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fname = $_POST["fname"];
	$lname = $_POST["lname"];
    $country = $_POST["country"];
    $subject = $_POST["subject"];

    // Create a string with the collected data
    $data = "First Name: $fname\nLast Name: $lname\nCountry: $country\nMessage: $subject\n";

    // Define the file path
    $file = "data.txt";

    // Open the file in append mode
    $handle = fopen($file, "a");

    // Write the data to the file
    fwrite($handle, $data);

    // Close the file
    fclose($handle);

    // Redirect to a success page or do something else
    header("Location: success.php");
    exit();
}
?>