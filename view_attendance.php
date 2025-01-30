<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_number = $_POST['roll_number'];

    $sql = "SELECT students.name, attendance.date, attendance.status 
            FROM attendance 
            JOIN students ON students.id = attendance.student_id 
            WHERE students.roll_number = '$roll_number'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h3>Attendance Record</h3>";
        while ($row = $result->fetch_assoc()) {
            echo "{$row['date']} - {$row['status']}<br>";
        }
    } else {
        echo "No records found!";
    }
}
?>

<h2>Check Attendance</h2>
<form method="POST">
    <input type="text" name="roll_number" placeholder="Enter Roll Number" required>
    <button type="submit">View Attendance</button>
</form>
