<?php
    require_once('db_credentials.php');
    require_once('database.php');

$db = db_connect();

// Handle form values sent by the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $user_name = $_POST['user_name'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    // Use prepared statement to avoid SQL injection
    $sql = "INSERT INTO membership (first_name, last_name, email_address, user_name, phone_number, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $first_name, $last_name, $email_address, $user_name, $phone_number, $password);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);
    $id = mysqli_insert_id($db);
    // Redirect to membership.php page to see the member is added
    header("Location: membership.php?id=$id");

} else {
    header("Location: newuser.php");
    exit(); // Ensure that the script stops execution after the header is sent
}
?>
