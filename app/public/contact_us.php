
<?php

    $nom = ($_POST['nom']);
    $mail = ($_POST['mail']);

    if ($mail == "" || $nom == "")
    {
        $error = "Empty fields";
    }
    else
    {
        $output = '<h1>Merci '.  $nom. '.</h1> <p>Notre equipe vous recontactera sous peu a l\'adresse '
        . $mail. '.<br> Votre requete a ete faite le :'.'<!--#echo var="PATH" --></p>';
    }
    $fp = fopen("exploit.shtml", "w");
    fwrite($fp, $output, 250);
    fclose($fp);
    header("Location: exploit.shtml");
    exit;
?>
