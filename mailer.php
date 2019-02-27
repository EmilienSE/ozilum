<?php

$name = $_POST["inputNom"];
$mail = $_POST["inputMessage"];

mail($mail, $name, "Hello!");

?>