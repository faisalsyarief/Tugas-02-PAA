<?php
$detik = 60;
$menit = 1 * $detik;
$jam = $menit * $detik;
$waktu = 24;

// ==================== //

function jamKeDetik($jam_berangkat, $menit_berangkat, $detik_berangkat, $detik_tujuan = 0)
{
  $detik_berangkat = ($jam_berangkat * $GLOBALS['jam']) + ($menit_berangkat * $GLOBALS['menit']) + $detik_berangkat;
  $total_detik = $detik_berangkat + $detik_tujuan;

  return $total_detik;
}

function jamMenitDetik($total_detik)
{
  $jam_selesai = floor($total_detik / $GLOBALS['jam']) % $GLOBALS['waktu'];
  $menit_selesai = floor(($total_detik % $GLOBALS['jam']) / $GLOBALS['menit']);
  $detik_selesai = $total_detik % $GLOBALS['detik'];

  return sprintf("%02d:%02d:%02d", $jam_selesai, $menit_selesai, $detik_selesai);
}

// ==================== //

$cariJawaban1 = jamKeDetik(8, 52, 45, 5000);
$jawabanSoal1 = jamMenitDetik($cariJawaban1);

echo "<p> <h1>Soal 1:</h1> Seseorang berangkat pukul <b>08:52:45 (pukul 08 lewat 52 menit 45 detik)</b> dan tiba ditujuan setelah <b>5000 detik</b> kemudian. Susun program untuk menghitung dan mencetak pukul berapa <b>(jam:menit:detik)</b> dia tiba ditempat tujuan. </p>";
echo "<p>Jawaban 1: Waktu tiba ditempat tujuan: <b>" . $jawabanSoal1 . "</b> </p> <br>";

// ==================== //

$cariJawaban21 = jamKeDetik(8, 52, 45);
$cariJawaban22 = jamKeDetik(12, 15, 10);
$jawabanSoal2 = jamMenitDetik(($cariJawaban22 - $cariJawaban21));

echo "<p> <h1>Soal 2:</h1> Seseorang berangkat pukul <b>08:52:45 (pukul 08 lewat 52 menit 45 detik)</b>, dan tiba ditujuan pukul: <b>12:15:10</b>. Susun program untuk menghitung dan mencetak berapa jam, berapa menit dan berapa detik waktu yang dia habiskan dalam perjalanan. </p>";
echo "<p>Jawaban 2: Waktu yang dihabiskan dalam perjalanan: <b>" . $jawabanSoal2 . "<b> </p> <br>";

?>
