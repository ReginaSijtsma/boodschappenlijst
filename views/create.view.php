<?php require("views/partials/header.php"); ?>


<h1>Invoer nieuwe boodschap</h1>
<form method="POST" action= "/groceries/input">
    <table>
        <tr>
            <td><label for="name">Naam</label></td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><label for ="price">Prijs</label></td>
            <td><input type = "number" name="price" min="0" step="0.01"></td>
        </tr>
        <tr>
            <td><label for = "number">Aantal</label></td>
            <td><input type = "number" name="number" min="0"></td>
        </tr>
    </table>
    <input type="submit">
</form>


<?php require("views/partials/footer.php"); ?>