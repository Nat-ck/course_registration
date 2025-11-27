<?php
include 'config.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $courseCode = $_POST['code'] ?? '';
    $courseName = $_POST['name'] ?? '';
    $prerequisite = $_POST['prerequisite'] ?? '';
    $day = $_POST['day'] ?? '';
    $time = $_POST['time'] ?? '';
}

if ($courseCode){
    $stmt = $dbConnection->prepare('INSERT INTO courses(Course-name, prerequisite, day, time, Course-code) VALUES(?,?,?,?,?)');
    $stmt->bind_param('ssssi', $courseName,  $prerequisite, $day, $time, $courseCode);
    $stmt->execute();
    header("Location: ../templates/index.html");
    exit ;
}else{
    $message = 'Course code and course name is required';
}
?>