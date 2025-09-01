<form method="post">
    <label for="sisi">Sisi:</label>
    <input type="number" name="sisi" id="sisi" required>
    <button type="submit">Hitung</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sisi = $_POST['sisi'];
    $luas = $sisi * $sisi;
    echo "<p>Luas persegi dengan sisi $sisi adalah <b>$luas</b></p>";
}
?>