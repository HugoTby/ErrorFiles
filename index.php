<?php
// Récupérer l'adresse IP de l'utilisateur
$ip = $_SERVER['REMOTE_ADDR'];

// Vérifier si l'adresse IP de l'utilisateur est différente de ALLOWED_IP
if ($ip !== 'ALLOWED_IP') {
    // Rediriger l'utilisateur vers une page d'erreur ou afficher un message
    header('Location: /errors/403.html');
    exit;
}

?>
