<?php
    $servername = "";
    $username = "root";
    $password = "root";
    $dbname = "coding";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    $sql = "INSERT INTO Member (Firstname, Name, Age) VALUES ('$firstname', '$lastname', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "Utilisateur ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'utilisateur : " . $conn->error;
    }

    $conn->close();
?>
