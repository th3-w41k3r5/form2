<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $walkerID = $_POST['walkerID'];
    $email = $_POST['email'];

    // Save data to a text file
    $file = 'form_data.txt';
    $current = file_get_contents($file);
    $current .= "Walker ID: $walkerID, Email: $email\n";
    file_put_contents($file, $current);

    // Redirect to a thank you page
    header('Location: thank_you.html');
    exit();
}
?>
