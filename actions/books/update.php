<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update']) && isset($_POST['id'])) {
  echo "<h3>Data buku yang diubah diterima:</h3>";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Tidak ada data yang dikirim.";
}