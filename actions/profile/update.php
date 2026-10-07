<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update']) && isset($_POST['name'])) {
  echo "<h3>Data profil yang diubah diterima:</h3>";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  echo '<p><a href="../../pages/profile/edit.php">Kembali ke profil</a></p>';
} else {
  echo "Tidak ada data yang dikirim.";
}