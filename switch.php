<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 5</title>
</head>
<body>
  <form method="POST">
    <label for="number">Masukkan Pilihan (1-4):</label>
    <input type="number" name="pilihan" min="1" max="5" required>
    <br>
    <button type="submit">Submit</button>
  </form>
  <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $pilihan = $_POST['pilihan'];
      switch($pilihan) {
        case 1: 
          echo "Tutorial HTML";
          break;
        case 2:
          echo "Tutorial CSS";
          break;
        case 3:
          echo "Tutorial JavaScript";
          break;
        case 4:
          echo "Tutorial PHP";
          break;
        default:
          echo "Tidak ada pilihan";
      }
    }
  ?>
</body>
</html>


