<?php require("views/partials/header.php"); ?>

<h1>Boodschappenlijst</h1>

<table id="productTable">
    <tr>
        <th>Product</th>
        <th>Prijs</th>
        <th>Aantal</th>
        <th>Subtotaal</th>
    </tr>
        

    <?php foreach ($groceries as $grocerie_type => $value) : ?>
        <tr>
            <td><?= $value->name;?></td>
            <td class="productPrice"><?= $value->price;?></td>
            <td> 
                <form>
                    <input class="productQuantity" type="number" name="aantal" min = "0" value= <?= $value->number;?>> 
                </form>
            </td>
            <td class="productTotalCost"><?= $value->sub_total;?></td>
        </tr>
    <?php endforeach; ?>
                
        
    <tr>
        <td>Totaal</td>
        <td colspan="2"></tdcolspan="2">
        <td id="totalCost"><?= $total; ?></td>
    </tr>
</table>
        

    
<?php require("views/partials/footer.php"); ?>