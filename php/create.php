<?php
include 'config.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $courseCode = $_POST['code'] ?? '';
    $courseName = $_POST['name'] ?? '';
    $pre = $_POST['pre'] ?? '';
    $day = $_POST['day'] ?? '';
    $time = $_POST['time'] ?? '';
}

if ($courseCode){
    $stmt = $dbConnection->prepare('INSERT INTO courses(course_code, course_name, pre, day, time) VALUES(?,?,?,?,?)');
    $stmt->bind_param('sssss', $courseCode, $courseName, $pre, $day, $time);
    $stmt->execute();
    header("Location: ../templates/index.html");
    exit ;
}else{
    $message = 'Course code and course name is required';
}
?>