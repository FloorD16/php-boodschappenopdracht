<?php require "partials/header.php"; ?>
<?php require "partials/nav.php"; ?>

<form method="post">
    <label for="name">Naam product:</label>
    <input type="text" id="name" name="name" value=<?= $_POST['name'] ?? '' ?>>

    <?php if (isset($errors['name'])) : ?>
        <p class="error"><?= $errors['name'] ?></p>
    <?php endif; ?>

    <br>
    <label for="quantity">Aantal:</label>
    <input type="number" id="quantity" name="quantity" value=<?= $_POST['quantity'] ?? '' ?>>
    
    <?php if (isset($errors['quantity'])) : ?>
        <p class="error"><?= $errors['quantity'] ?></p>
    <?php endif; ?>
    
    <br>
    <label for="price">Prijs product:</label>
    <input type="number" step="any" id="price" name="price" value=<?= $_POST['price'] ?? '' ?>>

    <?php if (isset($errors['price'])) : ?>
        <p class="error"><?= $errors['price'] ?></p>
    <?php endif; ?>
    
    <br><br>
    <button type='submit'>Voeg toe</button>
</form>

<?php require "partials/footer.php"; ?>