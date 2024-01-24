<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raihan - 4b07a2ec - Guessing Game</title>
</head>
<body>

<?php
// Function to sanitize input
function sanitize_input($input)
{
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Check if the guess parameter is set
if (!isset($_GET['guess'])) {
    echo "Missing guess parameter";
} else {
    $raw_guess = $_GET['guess'];
    $sanitized_guess = sanitize_input($raw_guess);

    // Check if the guess parameter is empty
    if (empty($sanitized_guess)) {
        echo "Your guess is too short";
    } elseif (!is_numeric($sanitized_guess)) {
        // Check if the guess is not a number
        echo "Your guess is not a number";
    } else {
        // Adjust the correct answer as per the autograder instructions
        $correct_answer = 76; // Change this value based on the autograder's expectations

        // Check if the guess is correct
        if ($sanitized_guess < $correct_answer) {
            echo "Your guess is too low";
        } elseif ($sanitized_guess > $correct_answer) {
            echo "Your guess is too high";
        } else {
            echo "Congratulations - You are right";
       }
    }
}
?>

</body>
</html>
