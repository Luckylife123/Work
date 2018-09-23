<?php 

$aparatment = $_POST['aparatment'];
$name = $_POST['name'];
$number = $_POST['number'];
$date = $_POST['date'];
$email = $_POST['email'];
$mymail = $_POST['mymail'];
$comment = $_POST['comment'];





$aparatment = htmlspecialchars($aparatment);
$name = htmlspecialchars($name);
$number = htmlspecialchars($number);
$date = htmlspecialchars($date);
$email = htmlspecialchars($email);
$mymail = htmlspecialchars($mymail);
$comment = htmlspecialchars($comment);






$aparatment = urldecode($aparatment);
$name = urldecode($name);
$number = urldecode($number);
$date = urldecode($date);
$email = urldecode($email);
$mymail = urldecode($mymail);
$comment = urldecode($comment);






$aparatment = trim($aparatment);
$name = trim($name);
$number = trim($number);
$date = trim($date);
$email = trim($email);
$mymail = trim($mymail);
$comment = trim($comment);



$mail_subject = "Замовлення з сайту Мегарон";
$body = "Номер: ".$aparatment."<br>Ім'я: ".$name."<br>Номер: ".$number."<br> ".$date."<br>Емейл ".$email."<br>Коментарій: ".$comment;


$mail_headers= "Content-Type: text/html; charset=UTF-8"; 
mail ($mymail, $mail_subject, $body, $mail_headers);

