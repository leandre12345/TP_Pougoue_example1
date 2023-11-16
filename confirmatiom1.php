<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Confirmation des Adresses</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_addresses = $_POST["num_addresses"];
    ?>
    <form action="save_data.php" method="post">
        <?php
        for ($i = 1; $i <= $num_addresses; $i++) {
        ?>
        <div class="address-container">
            <h3>Adresse <?= $i ?></h3>
            <label for="street_<?= $i ?>">Rue:</label>
            <input type="text" name="street_<?= $i ?>" maxlength="50" required>

            <label for="street_nb_<?= $i ?>">Numéro:</label>
            <input type="number" name="street_nb_<?= $i ?>" required>

            <label for="type_<?= $i ?>">Type:</label>
            <select name="type_<?= $i ?>" maxlength="20">
                <option value="livraison">Livraison</option>
                <option value="facturation">Facturation</option>
                <option value="autre">Autre</option>
            </select>

            <label for="city_<?= $i ?>">Ville:</label>
            <select name="city_<?= $i ?>">
                <option value="Montréal">Montréal</option>
                <option value="Laval">Laval</option>
                <option value="Toronto">Toronto</option>
                <option value="Québec">Québec</option>
            </select>

            <label for="zipcode_<?= $i ?>">Code postal:</label>
            <input type="text" name="zipcode_<?= $i ?>" maxlength="6" required>
        </div>
        <?php
        }
        ?>
        <button type="submit">Confirmer</button>
    </form>
    <?php
    }
    ?>
</body>
</html>
