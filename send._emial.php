<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "marcin.w21@interia.pl"; // Zmień na swój adres e-mail
    $subject = "Nowa wiadomość z formularza kontaktowego";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n";

    $emailBody = "Imię i nazwisko: $name\n";
    $emailBody .= "Email: $email\n\n";
    $emailBody .= "Wiadomość:\n$message\n";

    // Wysyłanie e-maila
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>

