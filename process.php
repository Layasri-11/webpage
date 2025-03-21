<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $anxious = isset($_POST['anxious']) ? $_POST['anxious'] : 'Not Answered';
    $time_management = isset($_POST['time_management']) ? $_POST['time_management'] : 'Not Answered';
    $sleep = isset($_POST['sleep']) ? $_POST['sleep'] : 'Not Answered';

    // Display the submitted data
    echo "<h2>Your Submitted Responses:</h2>";
    echo "<p><strong>1. Are you getting anxious frequently?</strong> " . $anxious . "</p>";
    echo "<p><strong>2. Can't manage your time?</strong> " . $time_management . "</p>";
    echo "<p><strong>3. Are you getting enough sleep?</strong> " . $sleep . "</p>";

    // Redirect to index.html after a brief delay (5 seconds)
    header("refresh:3;url=indexx.html");
    exit();
} else {
    // If the form is not submitted properly, redirect to the form page
    header("Location: indexx.html");
    exit();
}
?>
