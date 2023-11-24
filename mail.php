<?php
$servername = "localhost";
$username = "id21566528_tenniscore";
$password = "Tennis93!";
$database = "id21566528_tenniscore";

function generateUniqueToken() {
    return md5(uniqid(mt_rand(), true));
}

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

if (isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $objet = $_POST['objet'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $token = generateUniqueToken();
    $requete = $bdd->prepare("INSERT INTO users (nom, objet, email, message, token) VALUES (:nom, :objet, :email, :message, :token)");

    $requete->execute(array(
        "nom" => $nom,
        "objet" => $objet,
        "email" => $email,
        "message" => $message,
        "token" => $token
    ));

    // Envoi de l'e-mail
    $to = "tenniscore93@gmail.com";
    $subject = "Nouveau message depuis le site Tennis Score";
    $headers = "From: $email";

    $messageBody = "Nom: $nom\n";
    $messageBody .= "Objet: $objet\n";
    $messageBody .= "E-mail: $email\n\n";
    $messageBody .= "Message:\n$message";

    // Utilisation de la fonction mail pour envoyer l'e-mail
    mail($to, $subject, $messageBody, $headers);

    header("Location: ./email_reussit.php");
}
?>
