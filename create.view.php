<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boodschappenlijst</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <a href="/">Overzicht</a>
        <a href="/create.php">Voeg toe</a> 
    </nav>
    <form method="post">
        <label for="name">Naam product:</label>
        <input type="text" id="name" name="name">
        <br><br>
        <label for="quantity">Aantal:</label>
        <input type="number" id="quantity" name="quantity">
        <br><br>
        <label for="price">Prijs product:</label>
        <input type="number" id="price" name="price">
    </form>
</body>
</html>