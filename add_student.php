<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll_number = $_POST['roll_number'];

    $sql = "INSERT INTO students (name, roll_number) VALUES ('$name', '$roll_number')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Student added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Add Student</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Student Name" required>
    <input type="text" name="roll_number" placeholder="Roll Number" required>
    <button type="submit">Add Student</button>
</form>
