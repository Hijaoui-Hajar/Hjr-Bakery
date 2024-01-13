<?php
$utilisateur = 'root';
$mot_de_passe = ' ';
$hote = 'localhost';
$nom_base_de_donnees = 'contact';

$connexion = oci_connect('localhost','root', $mot_de_passe, 'contact');
// Connexion à la base de données
//$connexion = oci_connect('votre_utilisateur', 'votre_mot_de_passe', 'votre_chaine_de_connexion');

// Vérification de la connexion
if (!$connexion) {
    $e = oci_error();
    die('Connexion échouée : ' . htmlentities($e['message'], ENT_QUOTES));
}

// Récupération des données du formulaire (assurez-vous de valider et nettoyer les données)
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';

// Utilisation de requêtes préparées pour sécuriser contre les injections SQL
$sql = "INSERT INTO 'contact' ('name', 'email', 'phone') VALUES (:nom, :email, :phone)";

$statement = oci_parse($connexion, $query);

// Liaison des paramètres
oci_bind_by_name($statement, ':name', $name);
oci_bind_by_name($statement, ':email', $email);
oci_bind_by_name($statement, ':phone', $phone);

// Exécution de la requête
oci_execute($statement);

// Fermeture de la connexion
oci_close($connexion);
?>