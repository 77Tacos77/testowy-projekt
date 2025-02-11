<?php
header('Content-Type: application/json');

$email = $_POST['email'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$haslo = $_POST['haslo'];
 
// echo "Email: $email, Imie: $imie, Nazwisko: $nazwisko, Haslo: $haslo";
 
$users = array("email"=> $email, "imie"=> $imie, "nazwisko" => $nazwisko, "haslo" => $haslo);
 
echo json_encode([
   'uzytkownicy' => $users
]);
?>