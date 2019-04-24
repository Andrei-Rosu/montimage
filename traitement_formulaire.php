<?php
/*
    ********************************************************************************************
    CONFIGURATION
    ********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer � plusieurs � la fois, s�parez-les par une virgule
$destinataire = 'contact@montimage.com';
//$destinataire = 'sana.mallouli@gmail.com';

// copie ? (envoie une copie au visiteur)
$copie = 'oui'; // 'oui' ou 'non'

// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a �chou�, veuillez r�essayer SVP.";

// Messages d'erreur du formulaire
$message_erreur_formulaire = "Vous devez d'abord <a href=\"contact.html\">envoyer le formulaire</a>.";
$message_formulaire_invalide = "V�rifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

/*
    ********************************************************************************************
    FIN DE LA CONFIGURATION
    ********************************************************************************************
*/

// on teste si le formulaire a �t� soumis
if (!isset($_POST['envoi']))
{
    // formulaire non envoy�
    echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
}
else
{
    /*
     * cette fonction sert � nettoyer et enregistrer un texte
     */
    function Rec($text)
    {
        $text = htmlspecialchars(trim($text), ENT_QUOTES);
        if (1 === get_magic_quotes_gpc())
        {
            $text = stripslashes($text);
        }

        $text = nl2br($text);
        return $text;
    };

    /*
     * Cette fonction sert � v�rifier la syntaxe d'un email
     */
    function IsEmail($email)
    {
        $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
        return (($value === 0) || ($value === false)) ? false : true;
    }

    // formulaire envoy�, on r�cup�re tous les champs.
    $name     = (isset($_POST['name']))     ? Rec($_POST['name'])     : '';
    $email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
    $objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
    $message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

    // On va v�rifier les variables et l'email ...
    $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erron�, soit il vaut l'email entr�

    if (($name != '') && ($email != '') && ($objet != '') && ($message != ''))
    {
        // les 4 variables sont remplies, on g�n�re puis envoie le mail
        //	$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Montimage <contact@montimage.com>'."\r\n" .
            'Reply-To:contact@montimage.com'."\r\n" .
            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
            'Content-Disposition: inline'. "\r\n" .
            'Content-Transfer-Encoding: 7bit'." \r\n" .
            'X-Mailer:PHP/'.phpversion();

        // envoyer une copie au visiteur ?
        if ($copie == 'oui')
        {
            $cible = $destinataire.','.$email;
        }
        else
        {
            $cible = $destinataire;
        };

        // Remplacement de certains caract�res sp�ciaux
        $message = str_replace("&#039;","'",$message);
        $message = str_replace("&#8217;","'",$message);
        $message = str_replace("&quot;",'"',$message);
        $message = str_replace('<br>','',$message);
        $message = str_replace('<br />','',$message);
        $message = str_replace("&lt;","<",$message);
        $message = str_replace("&gt;",">",$message);
        $message = str_replace("&amp;","&",$message);

        // Envoi du mail
        if (mail($cible, '[montimage.com] '.$objet, 'Message delivered from: '.$name.' ('.$email.')'."\n\n\n".$message, $headers))
        {
            //echo '<p>'.$message_envoye.'</p>'."\n";
            header('Location: http://www.montimage.com/contact.html');
        }
        else
        {
            echo '<p>'.$message_non_envoye.'</p>'."\n";
        };
    }
    else
    {
        // une des 3 variables (ou plus) est vide ...
        echo '<p>'.$message_formulaire_invalide.' <a href="contact.html">Retour au formulaire</a></p>'."\n";
    };
}; // fin du if (!isset($_POST['envoi']))
?>