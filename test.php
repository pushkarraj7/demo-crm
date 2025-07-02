<?php
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : "hello@axismobi.com";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Review - CRM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="/assets/css/review.css" />
</head>

<body>
  <div class="review-container">
    <!-- Left Form Content -->
    <div class="review-form">
      <div class="form-box">
        <div class="logo">
          <img src="../assets/img/axismobi/photos/logo.png" alt="Axismobi Logo" />
        </div>

        <div class="login-review-title">Your account setup is almost complete</div>

        <div class="review-illustration">
          <img src="../assets/img/axismobi/photos/mail.png" alt="Email Illustration" />
        </div>

        <p class="instruction-text">
          We’ve sent a verification email to:
        </p>

        <p class="email-text">
          <strong><?= $email ?></strong>
        </p>

        <p class="instruction-text" style="margin-top: 10px;">
          Please check your inbox and verify your email address to activate your Axismobi account and access the dashboard.
        </p>

        <p class="instruction-text" style="margin-top: 20px; font-size: 13px; color: #666;">
          Didn’t receive the email? Check your spam folder or <a href="#" class="resend-link">click here to resend</a>.
        </p>
      </div>
    </div>

    <!-- Right Visual Preview -->
    <div class="review-visual"></div>
  </div>
</body>

</html>
