<?php require "partials/header.php"; ?>
<?php require "partials/nav.php"; ?>
    
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

        <?php foreach ($groceries as $product) : ?> 
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

<?php require "partials/footer.php"; ?>