<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $date = date('Y-m-d'); // Current date
    $status = $_POST['status'];

    $sql = "INSERT INTO attendance (student_id, date, status) VALUES ('$student_id', '$date', '$status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Attendance recorded!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Mark Attendance</h2>
<form method="POST">
    <select name="student_id" required>
        <option value="">Select Student</option>
        <?php
        $result = $conn->query("SELECT * FROM students");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['name']} ({$row['roll_number']})</option>";
        }
        ?>
    </select>
    <select name="status" required>
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
    </select>
    <button type="submit">Submit Attendance</button>
</form>
