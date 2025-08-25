<?php require "partials/header.php"; ?>
<?php require "partials/nav.php"; ?>

<form method="post">
    <label for="name">Naam product:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="quantity">Aantal:</label>
    <input type="number" id="quantity" name="quantity">
    <br>
    <label for="price">Prijs product:</label>
    <input type="number" step="any" id="price" name="price">
    <br><br>
    <button type='submit'>Voeg toe</button>
</form>

<?php require "partials/footer.php"; ?>