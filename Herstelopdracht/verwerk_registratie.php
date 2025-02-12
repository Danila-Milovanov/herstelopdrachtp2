<?php
session_start();

function valideerInvoer($data) {
    return htmlspecialchars(trim($data));
}
    // controle dat formulier is toegevoegt
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fouten = [];

    // values
    $naam = !empty($_POST['naam']) ? valideerInvoer($_POST['naam']) : $fouten[] = "Naam is verplicht.";
    if (isset($naam) && (strlen($naam) < 3 || strlen($naam) > 15)) {
        $fouten[] = "De naam moet tussen 3 en 15 tekens lang zijn.";
    }



    $email = !empty($_POST['email']) ? valideerInvoer($_POST['email']) : $fouten[] = "E-mailadres is verplicht.";
    if (isset($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $fouten[] = "Voer een geldig e-mailadres in.";
    }



    $wachtwoord = !empty($_POST['wachtwoord']) ? valideerInvoer($_POST['wachtwoord']) : $fouten[] = "Wachtwoord is verplicht.";
    if (isset($wachtwoord) && strlen($wachtwoord) < 6) {
        $fouten[] = "Het wachtwoord moet minimaal 6 tekens bevatten.";
    }



    $tijdslot = !empty($_POST['tijdslot']) ? valideerInvoer($_POST['tijdslot']) : $fouten[] = "Kies een tijdslot.";


    $stad = !empty($_POST['stad']) && in_array($_POST['stad'], ['Amsterdam', 'Rotterdam', 'Utrecht', 'Den Haag']) ? valideerInvoer($_POST['stad']) : $fouten[] = "Kies een geldige stad.";

    // if errors - feedback
    if ($fouten) {
        echo "<h2>Fouten:</h2><ul><li>" . implode("</li><li>", $fouten) . "</li></ul><a href='javascript:history.back()'>Ga terug</a>";
        exit;
    }

    // no errors - opslaan
    $_SESSION['naam'] = $naam;
    $_SESSION['tijdslot'] = $tijdslot;

    // redirect
    header("Location: bevestiging.php");
    exit;
} else {
    echo "Ongeldige toegang tot deze pagina.";
}
?>

