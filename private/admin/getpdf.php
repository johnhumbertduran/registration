<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$mpdf = new \Mpdf\Mpdf();


$data = '';


$data .= '<div>

          <img src="../../public/images/logo.png">
          Aklan Catholic<br> College Alumni<br> Registration
          </div>
          
          <style>
          img{width:150px;}
          </style>
          ';

$data .= '<strong>First Name</strong>' .$fname . '<br/>';
$data .= '<strong>Last Name</strong>' .$lname . '<br/>';
$data .= '<strong>Email</strong>' .$email . '<br/>';
$data .= '<strong>Phone</strong>' .$phone . '<br/>';

if($message){
    $data .= "<br/><strong>Message</strong>" .$message;
}

$mpdf->WriteHTML($data);

// $mpdf->lastpage();   

$mpdf->Output('register.pdf', 'D');

?>