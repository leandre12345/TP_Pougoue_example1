<?php
// Assurez-vous de remplacer ces informations avec les paramètres appropriés
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Tp_address";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Insérer les données dans la base de données
    for ($i = 1; $i <= $_POST["num_addresses"]; $i++) {
        $street = $_POST["street_$i"];
        $street_nb = $_POST["street_nb_$i"];
        $type = $_POST["type_$i"];
        $city = $_POST["city_$i"];
        $zipcode = $_POST["zipcode_$i"];

        $sql = "INSERT INTO addresses (street, street_nb, type, city, zipcode) VALUES ('$street', $street_nb, '$type', '$city', '$zipcode')";

        if ($conn->query($sql) !== TRUE) {
            echo "Erreur lors de l'insertion des données : " . $conn->error;
        }
    }
}
$conn->close();
?>
