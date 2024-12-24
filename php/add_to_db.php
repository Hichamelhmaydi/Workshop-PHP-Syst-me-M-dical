<?php
include("connc.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];


$stmt = $mysqli->prepare("INSERT INTO patient (nom, prenom) VALUES (?, ?)");
$stmt->bind_param("ss", $nom, $prenom); 
if ($stmt->execute()) {
    echo "Données insérées avec succès.";
} else {
    echo "Erreur lors de l'insertion : " . $stmt->error;
}
if (file_exists('../choix_dr.html')) {
    header("Location: ../choix_dr.html");
    exit;
} 
$stmt->close();

?>
