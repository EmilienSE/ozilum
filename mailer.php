<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$mail = 'esechilariu@yahoo.fr'; // Déclaration de l'adresse de destination.
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}
	//=====Déclaration des messages au format texte et au format HTML.
	$message_txt  = 'Bonjour,'."\r\n\r\n";
	$message_txt .= 'Vous avez une nouvelle demande de contact de la part de '.strtoupper($_POST['inputNom']).' '.ucfirst($_POST['inputPrenom']).'.'."\r\n\r\n";
	$message_txt .= 'Voici sa demande :'."\r\n";
	$message_txt .= ' '."\r\n";
	$message_txt .= $_POST['message']."\r\n";
	$message_txt .= ' '."\r\n";
	$message_txt .= 'Vous pouvez le recontacter au : '.$_POST['inputPhone'].' ou à son adresse mail : '.$_POST['inputEmail']."\r\n\r\n";

	$message_html = "<html><head></head><body>";
	$message_html .= "<h1>Bonjour,</h1><br/>";
	$message_html .= "<p>Vous avez une nouvelle demande de contact de la part de <b>".strtoupper($_POST['inputNom'])." ".ucfirst($_POST['inputPrenom'])."</b>.</p>";
	$message_html .= "<p>Voici sa demande :</p>";
	$message_html .= "<p><i>".$_POST['inputMessage']."</i></p>";
	$message_html .= "<p>Vous pouvez le recontacter au : <a href=\"tel:".$_POST['inputPhone']."\">".$_POST['inputPhone']."</a>, ou à son adresse mail : <a href=\"mailto:".$_POST['inputEmail']."\">".$_POST['inputEmail']."</a></p>";
	$message_html .= "</body></html>";
	//==========
	 
	//=====Création de la boundary.
	$boundary = "-----=".md5(rand());
	$boundary_alt = "-----=".md5(rand());
	//==========
	 
	//=====Définition du sujet.
	$sujet = "Nouveau contact via Ozilum.fr";
	//=========
	 
	//=====Création du header de l'e-mail.
	$header = "From: \"".strtoupper($_POST['inputNom']).' '.ucfirst($_POST['inputPrenom'])."\"<".$_POST['inputEmail'].">".$passage_ligne;
	$header.= "Reply-to: \"".strtoupper($_POST['inputNom']).' '.ucfirst($_POST['inputPrenom'])."\"<".$_POST['inputEmail'].">".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========
	 
	//=====Création du message.
	$message = $passage_ligne."--".$boundary.$passage_ligne;
	$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
	$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
	//=====Ajout du message au format texte.
	$message.= "Content-Type: text/plain; charset=\"utf-8\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_txt.$passage_ligne;
	//==========
	 
	$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
	 
	//=====Ajout du message au format HTML.
	$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
	$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
	$message.= $passage_ligne.$message_html.$passage_ligne;
	//==========
	 
	//=====On ferme la boundary alternative.
	$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
	//==========
	 
	 
	 
	$message.= $passage_ligne."--".$boundary.$passage_ligne;
	 
	//=====Envoi de l'e-mail.

	if (mail($mail,$sujet,$message,$header)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Le message a bien été envoyé ! Merci";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Une erreur est survenue, réessayez plus tard.";
    }
	 
	//==========
} else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Une erreur est survenue, réessayez plus tard.";
}


?>
