<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratieformulier</title>
</head>
<body>
    <h1>Evenement Registratieformulier</h1>
    <form action="verwerk_registratie.php" method="POST">
        <label for="naam">Naam (3-15 tekens):</label><br>
        <input type="text" id="naam" name="naam" minlength="3" maxlength="15" required><br><br>

        <label for="email">E-mailadres:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="wachtwoord">Wachtwoord (minimaal 6 tekens):</label><br>
        <input type="password" id="wachtwoord" name="wachtwoord" minlength="6" required><br><br>

        <label>Voorkeur tijdslot:</label><br>
        <input type="radio" id="ochtend" name="tijdslot" value="Ochtend" required>
        <label for="ochtend">Ochtend</label><br>
        <input type="radio" id="middag" name="tijdslot" value="Middag" required>
        <label for="middag">Middag</label><br><br>

        <label for="stad">Kies je stad:</label><br>
        <select id="stad" name="stad" required>
            <option value="">--Selecteer een stad--</option>
            <option value="Amsterdam">Amsterdam</option>
            <option value="Rotterdam">Rotterdam</option>
            <option value="Utrecht">Utrecht</option>
            <option value="Den Haag">Den Haag</option>
        </select><br><br>

        <button type="submit">Registreer</button>
    </form>
</body>
</html>
