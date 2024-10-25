<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);

    // Replace with your Telegram bot token
    $botToken = "7635063415:AAFq8psLp52CWEVcyVNYDIGeQiA0BQT7e-MKEN";
    
    // Replace with your chat ID or a specific Telegram chat ID
    $chatId = "@Pageetc_bot"; 
    $message = "First Name: $firstName\nLast Name: $lastName";

    // Send message to Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);
    
    // Execute the URL to send the message
    file_get_contents($url);
    
    // Confirmation response
    echo "Data submitted successfully. Message sent to Telegram.";
} else {
    echo "Invalid request.";
}
?>
