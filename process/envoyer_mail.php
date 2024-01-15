<?php

if (!isset($_POST['email']) || !isset($_POST['name']) || !isset($_POST['surname']) || !isset($_POST['message'])) {
    $res = ["message" => "Veuillez remplir tous les champs", "success" => false];
    echo json_encode($res);
    return false;
}

extract($_POST);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $res = ["message" => "Veuillez entrer une addresse email valide", "success" => false];
    echo json_encode($res);
    return false;
}





$subject = 'Demande de renseignement --- ' . date('d/m/Y');

$headers = 'From: mmi23g02@mmi-troyes.fr' . "\r\n" . 'Reply-To: mmi23g02@mmi-troyes.fr' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

if (mail($email, $subject, $message, $headers)) {
    $res = ['message' => 'Mail envoyé !', 'success' => true];
} else {
    $res = ['message' => "Erreur lors de l'envoie du mail.", 'success' => false];
}

echo json_encode($res);