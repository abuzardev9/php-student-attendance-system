<?php
include 'db_connect.php';

$sql = "SELECT students.name, students.roll_number, attendance.date, attendance.status 
        FROM attendance 
        JOIN students ON students.id = attendance.student_id 
        ORDER BY attendance.date DESC";

$result = $conn->query($sql);

echo "<h2>Attendance Records</h2>";
echo "<table border='1'>
<tr>
    <th>Name</th>
    <th>Roll Number</th>
    <th>Date</th>
    <th>Status</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['roll_number']}</td>
            <td>{$row['date']}</td>
            <td>{$row['status']}</td>
          </tr>";
}
echo "</table>";
?>
