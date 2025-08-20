<?php
echo "<h2>Rumus Pythagoras</h2>";
echo "Rumus: c² = a² + b²<br>";

// Contoh soal
$a = 6;
$b = 8;
echo "Contoh Soal: Berapakah panjang sisi miring segitiga dengan alas $a cm dan tinggi $b cm?<br>";

// Hitung
$c = sqrt(($a*$a) + ($b*$b));
echo "Jawaban: √(($a x $a) + ($b x $b)) = $c cm";
?>
