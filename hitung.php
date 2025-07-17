<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
    function clearResult() {
      document.getElementById('hasil').innerHTML = '';
    }
  </script>
</head>

<body>
  <h1>Hitung Angka</h1>
  <form action="" method="post">
    <label for="angka1">Angka 1:</label>
    <input type="number" id="angka1" name="angka1" required>
    <br>
    <br>
    <label for="angka2">Angka 2:</label>
    <input type="number" id="angka2" name="angka2" required>
    <br>
    <br>
    <input type="submit" value="Hitung">
    <input type="reset" value="Reset" onclick="clearResult()">
    <br>
  </form>

  <div id="hasil">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $angka1 = $_POST["angka1"];
      $angka2 = $_POST["angka2"];
      $jumlah = $angka1 + $angka2;
      echo "<h2>Hasil: $jumlah</h2>";
    }
    ?>
  </div>
</body>

</html>