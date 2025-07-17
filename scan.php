<?php

include 'connect.php';

$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];
$date = date('Y-m-d');

// Vérifier si déjà enregistré
$sql = "SELECT * FROM attendance WHERE student_id=? AND course_id=? AND attendance_date=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iis", $student_id, $course_id, $date);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    // Insérer présence
    $insert = "INSERT INTO attendance (student_id, course_id, attendance_date) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insert);
    $stmt->bind_param("iis", $student_id, $course_id, $date);
    $stmt->execute();
    echo "Présence enregistrée !";
} else {
    echo "Vous avez déjà enregistré votre présence aujourd'hui.";
}