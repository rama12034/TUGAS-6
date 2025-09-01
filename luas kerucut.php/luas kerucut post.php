<form method="post">
    <label>Jari-jari (r):</label>
    <input type="number" name="r" required>
    <button type="submit">Hitung</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $r = $_POST["r"];
      $phi = 3.14;
      $luas = $phi * $r * $r;
      echo "<p>Luas alas kerucut dengan jari-jari $r adalah <b>$luas</b></p>";
  }