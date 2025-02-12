<?php
header('Content-Type: application/json');

$email = $_POST['email'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$haslo = str_repeat('*', strlen($_POST['haslo']));


$users = array("email"=> $email, "imie"=> $imie, "nazwisko" => $nazwisko, "haslo" => $haslo);

echo json_encode([
   'uzytkownicy' => $users
]);

// Write user data to dane.txt
file_put_contents("dane.txt", json_encode($users) . PHP_EOL, FILE_APPEND);
?>