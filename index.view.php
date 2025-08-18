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
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Hoeveelheid</th>
                <th>Subtotaal</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($products as $product) : ?> 
                <?=
                    "<tr>",
                        "<td>" . $product["name"] . "</td>",
                        "<td class=right>" . number_format($product["price"], 2) . "</td>",
                        "<td>" . $product["quantity"] . "</td>",
                        "<td class=right>" . number_format($product["subtotal"], 2) . "</td>",
                    "</tr>";  
                ?>
            <?php endforeach; ?>

        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><b>Totaal</b></td>
                <td class="right"><?=$total?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>