<form method="get">
    <label>Jari-jari (r):</label>
    <input type="number" name="r" required>
    <button type="submit">Hitung</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["r"])) {
    $r = $_GET["r"];
    $phi = 3.14;
    $luas = $phi * $r * $r;
    echo "<p>Luas alas kerucut dengan jari-jari $r adalah <b>$luas</b></p>";
}
?>
get