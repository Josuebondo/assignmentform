<?php
require "./uploads/config.php";


$course =isset( $_POST['course']) ?  $_POST['course'] : '';
$subject =isset( $_POST['subject']) ?  $_POST['subject'] : '';
$title =isset( $_POST['title']) ?  $_POST['title'] : '';
$description =isset( $_POST['description']) ?  $_POST['description'] : '';
$submission_date =isset( $_POST['submission_date']) ?  $_POST['submission_date'] : '';
$name =isset( $_POST['name']) ?  $_POST['name'] : '';
$roll_no =isset( $_POST['roll_no']) ?  $_POST['roll_no'] : '';
$file_path =isset( $_POST['file_path']) ?  $_POST['file'] : '';




$sql = " INSERT INTO assignments( course, subject, title, description,submission_date, name, roll_no, file_path ) VALUES(:course, :subject, :title, :description, :submission_date, :name, :roll_no, :file_path )";
$req = $pdo->prepare($sql);
$exec = $req->execute(array(
    ':course'=>$course,
    ':subject'=>$subject,
    ':title'=>$title,
    ':description'=>$description,
    ':submission_date'=>$submission_date,
    ':name'=>$name,
    ':roll_no'=>$roll_no,
    ':file_path'=>$file_path
));
if ($exec) {
    echo "donnees inseré";
    
}else{
    echo "echec d'insertion";
}

?>
