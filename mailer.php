<?php

header("Content-Type: text/html; charset=utf-8");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$mail = 'anne.charrier@ozilum.fr'; // Déclaration de l'adresse de destination.
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}

	$nom = htmlentities($_POST['inputNom'], ENT_QUOTES, "UTF-8");
	$prenom = htmlentities($_POST['inputPrenom'], ENT_QUOTES, "UTF-8");
	$email = htmlentities($_POST['inputEmail'], ENT_QUOTES, "UTF-8");
	$telephone = htmlentities($_POST['inputPhone'], ENT_QUOTES, "UTF-8");
	$commentaire = htmlentities($_POST['inputMessage'], ENT_QUOTES, "UTF-8");

	//=====Déclaration des messages au format texte et au format HTML.
	$message_txt  = 'Bonjour,'."\r\n\r\n";
	$message_txt .= 'Vous avez une nouvelle demande de contact de la part de '.strtoupper($nom).' '.ucfirst($prenom).'.'."\r\n\r\n";
	$message_txt .= 'Voici sa demande :'."\r\n";
	$message_txt .= ' '."\r\n";
	$message_txt .= $commentaire."\r\n";
	$message_txt .= ' '."\r\n";
	$message_txt .= 'Vous pouvez le recontacter au : '.$telephone.' ou à son adresse mail : '.$email."\r\n\r\n";

	/*$message_html = "<html><head></head><body>";
	$message_html .= "<h2>Bonjour,</h2><br/>";
	$message_html .= "<h2>Vous avez une nouvelle demande de contact de la part de <b>".strtoupper($nom)." ".ucfirst($prenom)."</b>.</h2>";
	$message_html .= "<h3>Voici sa demande :</h3>";
	$message_html .= "<p><i>".$commentaire."</i></p>";
	$message_html .= "<h4>Vous pouvez le recontacter au : <b>".$telephone."</b>, ou à son adresse mail : <b><a href=\"mailto:".$email."\">".$email."</a></b></h4>";
	$message_html .= "</body></html>";*/


	$message_html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
      <style type="text/css">
      body {
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       margin:0 !important;
       width: 100% !important;
       -webkit-text-size-adjust: 100% !important;
       -ms-text-size-adjust: 100% !important;
       -webkit-font-smoothing: antialiased !important;
     }
     .tableContent img {
       border: 0 !important;
       display: block !important;
       outline: none !important;
     }
     a{
      color:#382F2E;
    }

    p, h1{
      color:#382F2E;
      margin:0;
    }
    p{
      text-align:left;
      color:#999999;
      font-size:14px;
      font-weight:normal;
      line-height:19px;
    }

    a.link1{
      color:#382F2E;
    }
    a.link2{
      font-size:16px;
      text-decoration:none;
      color:#ffffff;
    }

    h2{
      text-align:left;
       color:#222222; 
       font-size:19px;
      font-weight:normal;
    }
    div,p,ul,h1{
      margin:0;
    }

    .bgBody{
      background: #ffffff;
    }
    .bgItem{
      background: #ffffff;
    }
	
@media only screen and (max-width:480px)
		
{
		
table[class="MainContainer"], td[class="cell"] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class="specbundle"] 
	{
		width:100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}
		
td[class="spechide"] 
	{
		display:none !important;
	}
	    img[class="banner"] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
		td[class="left_pad"] 
	{
			padding-left:15px !important;
			padding-right:15px !important;
	}
		 
}
	
@media only screen and (max-width:540px) 

{
		
table[class="MainContainer"], td[class="cell"] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class="specbundle"] 
	{
		width:100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}
		
td[class="spechide"] 
	{
		display:none !important;
	}
	    img[class="banner"] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
	.font {
		font-size:18px !important;
		line-height:22px !important;
		
		}
		.font1 {
		font-size:18px !important;
		line-height:22px !important;
		
		}
}

    </style>

<script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"382F2E",
    "color":"999999",
    "bgItem":"ffffff",
    "title":"222222"
}
</script>

  </head>
  <body paddingwidth="0" paddingheight="0"   style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
    <table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center"  style=\'font-family:Helvetica, Arial,serif;\'>
  <tbody>
    <tr>
      <td><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" class="MainContainer">
  <tbody>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" width="40">&nbsp;</td>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
  <!-- =============================== Header ====================================== -->   
    <tr>
    	<td height=\'75\' class="spechide"></td>
        
        <!-- =============================== Body ====================================== -->
    </tr>
    <tr>
      <td class=\'movableContentContainer \' valign=\'top\'>
      	<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="35"></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td valign="top" align="center" class="specbundle"><div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable">
                                  <p style=\'text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;\'><span class="specbundle2"><span class="font1">Bonjour Anne,</span></span></p>
                                </div>
                              </div></td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
        </div>
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                          <tr><td height=\'55\'></td></tr>
                          <tr>
                            <td align=\'left\'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align=\'center\'>';
    $message_html .= '<h2>Vous avez une nouvelle demande de contact de la part de '.strtoupper($nom).' '.ucfirst($prenom).'</h2>';
    $message_html .= '</div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height=\'15\'> </td></tr>

                          <tr>
                            <td align=\'left\'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align=\'center\'>';
    $message_html .= '<p><i>'.$commentaire.'</i></p>';
    $message_html .= '</div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height=\'55\'></td></tr>

                          <tr>
                            <td align=\'center\'>
                              <table>
                                <tr>
                                  <td align=\'center\' bgcolor=\'#1A54BA\' style=\'background:#1A54BA; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;\'>
                                    <div class="contentEditableContainer contentTextEditable">
                                      <div class="contentEditable" align=\'center\'>';
    $message_html .= '<a target=\'_blank\' href=\'mailto:'.$email.'?subject=RE%3ADemande%20d%27informations%20sur%20OZILUM\' class=\'link2\' style=\'color:#ffffff;\'>Lui envoyer un message</a>';
    $message_html .= '</div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr><td height=\'20\'></td></tr>';
    $message_html .= '<tr>
                            <td align=\'left\'>
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align=\'center\'>
                                  <h3>Vous pouvez le recontacter au : <b>'.$telephone.'</b>, ou à son adresse mail : <b><a href=\"mailto:'.$email.'\">'.$email.'</a></b></h3>
                                </div>
                              </div>
                            </td>
                          </tr>                        
                        </table>
        </div></body></html>';


	//==========
	 
	//=====Création de la boundary.
	$boundary = "-----=".md5(rand());
	$boundary_alt = "-----=".md5(rand());
	//==========
	 
	//=====Définition du sujet.
	$sujet = "Nouveau contact via Ozilum.fr";
	//=========
	 
	//=====Création du header de l'e-mail.
	$header = "From: \"".strtoupper($nom).' '.ucfirst($prenom)."\"<".$email.">".$passage_ligne;
	$header.= "Reply-to: \"".strtoupper($nom).' '.ucfirst($prenom)."\"<".$email.">".$passage_ligne;
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
	$message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
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
