<?php
if(isset($_POST['submit'])) {
    $first_name="First Name:".$_POST['first_name']."";
    $last_name="Last Name:".$_POST['last_name']."";
    $email="Email:".$_POST['email']."";
    $department="Department:".$_POST['department']."";
    $gender="Gender:".$_POST['gender']."";
    $message="Message:".$_POST['message']."";
    $file=fopen("save_data.txt", "a");
    fwrite($file, $first_name);
    fwrite($file, $last_name);
    fwrite($file, $email);
    fwrite($file, $department);
    fwrite($file, $gender);
    fwrite($file, $message);
    fclose($file);
    echo"thank you for contacting me";
}
?>