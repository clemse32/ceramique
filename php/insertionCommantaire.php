<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $connect = mysqli_connect("127.0.0.1", "root", "", "ceramique" );
    $nom = mysqli_real_escape_string($connect, $_POST['nom']);
    $prenom = mysqli_real_escape_string($connect, $_POST['prenom']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);

    $sql ="INSERT INTO avis_message (Prenom, Nom, Mail, Message) value('$prenom', '$nom', '$email', '$message')";

    if (mysqli_query($connect, $sql)) {
        echo "reussi";
    } else {
        echo "pb";
    }

mysqli_close($connect);

}
?>