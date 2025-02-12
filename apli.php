<?php
header('Content-Type: application/json');

// Read existing data from dane.txt
$dane_file = 'dane.txt';
$existing_data = file_exists($dane_file) ? file($dane_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

$existing_emails = [];
foreach ($existing_data as $line) {
    $user_data = json_decode($line, true);
    if (isset($user_data['email'])) {
        $existing_emails[] = $user_data['email'];
    }
}
$email = $_POST['email'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$haslo = str_repeat('*', strlen($_POST['haslo']));

if (in_array($email, $existing_emails)) {
    echo json_encode(['error' => 'Email already exists.']);
    exit;
}

$users = array("email"=> $email, "imie"=> $imie, "nazwisko" => $nazwisko, "haslo" => $haslo);

echo json_encode([
   'uzytkownicy' => $users
]);


file_put_contents($dane_file, json_encode($users) . PHP_EOL, FILE_APPEND);
?>