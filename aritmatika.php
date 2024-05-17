<?php 
function hitungAritmatika($angka1, $angka2, $operator) {
    // Hasil perhitungan
    $hasil = 0;
  
    // Switch case berdasarkan operator
    switch ($operator) {
      case 'Tambah':
        $hasil = $angka1 + $angka2;
        break;
      case 'Kurang':
        $hasil = $angka1 - $angka2;
        break;
      case 'Kali':
        $hasil = $angka1 * $angka2;
        break;
      case 'Bagi':
        // Cek apakah pembagi nol
        if ($angka2 == 0) {
          echo "Kesalahan: Pembagian dengan nol tidak diizinkan.";
          return;
        }
        $hasil = $angka1 / $angka2;
        break;
      default:
        echo "Operator tidak valid. Gunakan salah satu dari: Tambah, Kurang, Kali, Bagi.";
        return;
    }
  
    // Tampilkan hasil
    echo "Hasil dari $angka1 $operator $angka2 adalah: $hasil";
  }
  
  // Contoh penggunaan
  hitungAritmatika(10, 5, 'Tambah'); // Output: Hasil dari 10 Tambah 5 adalah: 15
  echo "\n";
  hitungAritmatika(10, 5, 'Kurang'); // Output: Hasil dari 10 Kurang 5 adalah: 5
  echo "\n";
  hitungAritmatika(10, 5, 'Kali'); // Output: Hasil dari 10 Kali 5 adalah: 50
  echo "\n";
  hitungAritmatika(10, 5, 'Bagi'); // Output: Hasil dari 10 Bagi 5 adalah: 2
  
?>