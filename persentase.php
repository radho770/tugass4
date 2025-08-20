<?php
echo "<h2>Rumus Persentase</h2>";
echo "Rumus: (Bagian / Total) x 100%<br>";

// Contoh soal
$bagian = 50;
$total = 200;
echo "Contoh Soal: Berapakah persentase dari $bagian dari $total?<br>";

// Hitung
$persen = ($bagian / $total) * 100;
echo "Jawaban: ($bagian / $total) x 100% = $persen%";
?>
