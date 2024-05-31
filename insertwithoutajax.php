<?php

include('./config.php');

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $department = $conn->real_escape_string($_POST['department']);

    // Validate input
    if (empty($name) || empty($email) || empty($department)) {
        $response['status'] = 'error';
        $response['message'] = 'All fields are required.';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['status'] = 'error';
        $response['message'] = 'Invalid email format.';
    } else {
        $sql = "INSERT INTO employees (name, email, department) VALUES ('$name', '$email', '$department')";

        if ($conn->query($sql) === TRUE) {
            $response['status'] = 'success';
            $response['message'] = 'New record created successfully';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error: ' . $sql . '<br>' . $conn->error;
        }
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

header('Location: your_form_page.php?status=' . $response['status'] . '&message=' . urlencode($response['message']));
exit;
?>
