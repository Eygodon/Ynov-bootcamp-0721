<h1> Merci <?php echo ($_POST['nom']) ?></h1>
<p> Notre équipe vous recontactera sous peu à l'adresse <?php echo ($_POST['mail']) ?> </p>
<?php
if (isset($_POST['form']))
{
    $nom = ($_POST('nom'));
    $mail = ($_POST('mail'));

    if ($mail == "" || $nom == "")
    {
        $error = "Empty fields";
    }
    else
    {
        $output = '<h1>Merci'.  $nom. '.</h1> <p>Notre équipe vous recontactera sous peu à l\'adresse'
        . $mail. '.<br> Votre requête a été faite le :'.'<!--#echo var="DATE_LOCAL" --></p>';

    }
    $fp = fopen("exploit.shtml", "w");
    fwrite($fp, $output, 250);
    fclose($fp);
    header("Location: exploit.shtml");
    exit;
}
?>
