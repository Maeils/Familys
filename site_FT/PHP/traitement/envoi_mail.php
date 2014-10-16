<?php
ini_set("SMTP", "aspmx.l.google.com");

$TO = "florian.chassot@gmail.com";

$message = $_POST['message'] . "<br/><br/>" . $_POST['prenom'] . " " . $_POST['nom'];

$subject = "[Site Family's Team]".$_POST['sujet'];

mail($TO, $subject, $message);

Header("Location: ../../index.php?page=accueil");

?>