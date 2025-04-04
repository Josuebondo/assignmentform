<?php


$course = $_POST['course'];
$subject = $_POST['subject'];
$title = $_POST['title'];
$description = $_POST['description'];
$submission_date = $_POST['submission_date'];
$name = $_POST['name'];
$roll_no = $_POST['roll_no'];

echo " c'est un cours de " .$course ."<br>";
echo " suject du cours est : " .$subject ."<br>";
echo " titre : " .$title ."<br>";
echo " Description : " .$description ."<br>";
echo " est soumis le : " .$submission_date ."<br>";
echo " soumis par: " .$name ."<br>";
echo " numero de dossier : " .$roll_no."<br>";
?>
