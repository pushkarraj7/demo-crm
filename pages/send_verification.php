<?php
header('Content-Type: application/json');

// Check if email is provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email']);
        exit;
    }

    $subject = "Verify your AXISMOBI CRM Account";
    $verification_link = "http://yourdomain.com/signup_f.html?email=" . urlencode($email);

    $message = "
        <html>
        <body>
          <p>Your CRM account is almost ready.</p>
          <p>
            <a href='{$verification_link}'>Click this link within 7 days</a> and you'll be all set!
          </p>
          <p>Thank you,<br>The AXISMOBI Team</p>
        </body>
        </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: AXISMOBI <no-reply@yourdomain.com>\r\n";

    if (mail($email, $subject, $message, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Email sending failed']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
