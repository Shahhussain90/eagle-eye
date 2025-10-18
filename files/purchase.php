<?php

include "connection.php";

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Use filter_input to sanitize and validate user input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
    $plan = filter_input(INPUT_POST, 'PLAN', FILTER_SANITIZE_STRING);
    // $checkbox = $_POST['checkbox'];
    // if (isset($checkbox)) {
    //     $checkbox = 'checked';
    // } else {
    //     $checkbox = 'unchecked';
    // }

    // Prepare the query
    $stmt = $con->prepare("INSERT INTO purchase_request (customer_name, email, p_number, PLAN) VALUES (?, ?, ?, ?)");

    if (!$stmt) {
        echo "Prepare failed: (" . $con->errno . ") " . $con->error;
        exit();
    }

    // Bind the parameters
    $stmt->bind_param("ssss", $name, $email, $number, $plan);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('we will contact you as soon as possible')</script>";
        echo "<script>window.location.href='../index.php';</script>";
    } else {
        echo "<script>alert('could not submit form try again later sorry!')</script>";
        echo "<script>window.location.href='../index.php';</script>";
    }

    // Close the statement
    $stmt->close();
}
