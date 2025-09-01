<form method="get">
    <label for="sisi">Sisi:</label>
    <input type="number" name="sisi" id="sisi" required>
    <button type="submit">Hitung</button>
</form>

<?php
if (isset($_GET['sisi'])) {
    $sisi = $_GET['sisi'];
    $luas = $sisi * $sisi;
    echo "<p>Luas persegi dengan sisi $sisi adalah <b>$luas</b></p>";
}
?>