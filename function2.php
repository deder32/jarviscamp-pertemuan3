<?php
function tampilkanAngkaGenap($awal, $akhir) {
  // Cek apakah input valid
  if ($awal > $akhir) {
    echo "Angka awal harus lebih kecil dari angka akhir";
    return;
  }

  // Array untuk menyimpan angka genap
  $evenNumbers = [];

  // Looping dari angka awal hingga akhir
  for ($i = $awal; $i <= $akhir; $i++) {
    // Periksa apakah bilangan genap
    if ($i % 2 == 0) {
      // Tambahkan bilangan genap ke array
      $evenNumbers[] = $i;
    }
  }

  // Tampilkan bilangan genap dengan format baris, dipisahkan oleh koma
  echo implode(", ", $evenNumbers);
}

// Contoh penggunaan
tampilkanAngkaGenap(1, 10);

?>