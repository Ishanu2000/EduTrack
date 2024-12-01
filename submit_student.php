<?php
// Database connection
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$dbname = "student_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $name = $_POST['studentName'];
    $studentId = $_POST['studentId'];
    $email = $_POST['studentEmail'];
    $age = $_POST['studentAge'];
    $year = $_POST['studentYear'];
    $semester = $_POST['studentSemester'];
    $gpa = $_POST['semesterGpa'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO students (name, student_id, email, age, year, semester, gpa) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiids", $name, $studentId, $email, $age, $year, $semester, $gpa);

    // Execute the query
    if ($stmt->execute()) {
        echo "Student data added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "No data received.";
}
?>
