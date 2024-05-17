<html>
    <head>
        <title> Function 1</title>
    </head>
    <body>
    <?php 
function tampilkanAngkaGanjil($awal, $akhir) {
    // Cek apakah input valid
    if ($awal > $akhir) {
      echo "Angka awal harus lebih kecil dari angka akhir";
      return;
    }
  
    // Array untuk menyimpan angka ganjil
    $oddNumbers = [];
  
    // Looping dari angka awal hingga akhir
    for ($i = $awal; $i <= $akhir; $i++) {
      // Periksa apakah bilangan ganjil
      if ($i % 2 != 0) {
        // Tambahkan bilangan ganjil ke array
        $oddNumbers[] = $i;
      }
    }
  
    // Tampilkan bilangan ganjil dengan format baris, dipisahkan oleh koma
    echo implode(", ", $oddNumbers);
  }
  
  // Contoh penggunaan
  tampilkanAngkaGanjil(1, 10);
  
?>
    </body>
</html>
