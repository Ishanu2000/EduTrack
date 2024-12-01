<?php include('header.php'); ?>

<?php
// Database connection settings
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

// Check if student ID is passed
if (isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // Fetch student details
    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();

    // If student not found, redirect to the student list
    if (!$student) {
        header("Location: student-list.php");
        exit();
    }
}

// Update student details when form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $gpa = $_POST['gpa'];

    // Update student record
    $update_sql = "UPDATE students SET name = ?, student_id = ?, email = ?, age = ?, year = ?, semester = ?, gpa = ? WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("sssssssi", $name, $student_id, $email, $age, $year, $semester, $gpa, $_GET['id']);

    if ($stmt->execute()) {
        // Redirect back to the student list page after update
        header("Location: student-list.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Student</h1>
        <form method="POST" action="edit-student.php?id=<?php echo $student['id']; ?>">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" required>
            
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" value="<?php echo htmlspecialchars($student['student_id']); ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($student['email']); ?>" required>
            
            <label for="age">Age:</label>
            <input type="number" name="age" value="<?php echo htmlspecialchars($student['age']); ?>" required>
            
            <label for="year">Year:</label>
            <input type="number" name="year" value="<?php echo htmlspecialchars($student['year']); ?>" required>
            
            <label for="semester">Semester:</label>
            <input type="number" name="semester" value="<?php echo htmlspecialchars($student['semester']); ?>" required>
            
            <label for="gpa">GPA:</label>
            <input type="text" name="gpa" value="<?php echo htmlspecialchars($student['gpa']); ?>" required>
            
            <button type="submit">Update Student</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
