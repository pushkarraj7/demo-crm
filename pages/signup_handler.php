<?php
// DB Connection
$host = "localhost";
$user = "root"; // use your DB username
$pass = "";     // use your DB password
$dbname = "demo_crm";

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get posted JSON
$data = json_decode(file_get_contents("php://input"), true);

// Validate
if (
    isset($data['fullName'], $data['phone'], $data['email'], $data['password'],
          $data['country'], $data['companyName'], $data['companyAddress'])
) {
    $fullName = $conn->real_escape_string($data['fullName']);
    $phone = $conn->real_escape_string($data['phone']);
    $email = $conn->real_escape_string($data['email']);
    $password = password_hash($data['password'], PASSWORD_DEFAULT); // Secure hash
    $country = $conn->real_escape_string($data['country']);
    $companyName = $conn->real_escape_string($data['companyName']);
    $companyAddress = $conn->real_escape_string($data['companyAddress']);

    // Insert into table (make sure the table `users` exists)
    $sql = "INSERT INTO users (full_name, phone, email, password, country, company_name, company_address)
            VALUES ('$fullName', '$phone', '$email', '$password', '$country', '$companyName', '$companyAddress')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid data.";
}
?>
