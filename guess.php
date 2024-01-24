<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b07a2ec</title>
</head>
<body>

<?php
function sanitize_input($input)
{
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

if (!isset($_GET['guess'])) {
    echo "Missing guess parameter";
} else {
    $raw_guess = $_GET['guess'];
    $sanitized_guess = sanitize_input($raw_guess);

    if (empty($sanitized_guess)) {
        echo "Your guess is too short";
    } elseif (!is_numeric($sanitized_guess)) {
        echo "Your guess is not a number";
    } else {
        $correct_answer = 42; 
        
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
