<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h1>Archi Linux</h1>
    </header>

    <main>
        <section>
            <h2>Bienvenue</h2>
            <p>C'est une simple page web.</p>
        </section>

        <section>
            <h2>Formulaire d'interaction avec MariaDB</h2>
            <form id="myForm" action="site.php" method="post">
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstname" required>

                <label for="lastname">Nom :</label>
                <input type="text" id="lastname" name="lastname" required>

                <label for="age">Âge :</label>
                <input type="text" id="age" name="age" required>

                <button type="button" onclick="addUser()">Ajouter Utilisateur</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Coding Factory. Tous droits réservés.</p>
    </footer>
</body>

</html>

<?php
// require("site.html");

$servername = "archilinux";
$username = "root";
$password = "root";
$dbname = "archilinux";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];

$sql = "INSERT INTO Member (Firstname, `Name`, Age) VALUES ('$firstname', '$lastname', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "Utilisateur ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
}

$conn->close();
?>