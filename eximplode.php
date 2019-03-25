<?php
//contoh Explode 1
$data = "Ubaidillah, Gunungkidul, 28/07/1987, L, Islam";
$arr_data = explode (", ",$data);
$nama = $arr_data[0];
echo "Dari Data : ".$data;
echo "<br>";
echo "Nama :".$nama;

//contoh Explode 2
$nik = "340 301 280787 0001";
$arr_nik = explode (" ",$data);
$tgl_lhr = $arr_nik[2];
echo "Dari NIK : ".$nik;
echo "<br>";
echo "Tanggal Lahir :".$tgl_lahir;

//contoh Explode 3
$telpon = "0274-391019";
$arr_telpon = explode ("-",$telpon);
$kd_area = $arr_nik[0];
echo "Dari Nomor Telpon : ".$telpon;
echo "<br>";
echo "Kode Area :".$kd_area;

//contoh Explode 4
$kd_terbang = "GA/16874";
$arr_kd_terbang = explode ("/",$kd_terbang);
$nmr_terbang = $arr_nik[1];
echo "Dari Kode Penerbangan : ".$kd_terbang;
echo "<br>";
echo "Nomor Penerbangan :".$nmr_terbang;

//contoh Explode 5
$nosk = "09|Pem|III|2019";
$arr_nosk = explode ("|",$nosk);
$bln_sk = $arr_nosk[2];
echo "DariNomor SK : ".$nosk;
echo "<br>";
echo "Bulan Terbit SK :".$nmr_terbang;

//contoh Implode 1
$bahan = ["Garam", "Cabe", "Bawang Merah", "Bawah Putih", "Gula Merah"];
$rujak = implode (", ",$bahan);
echo "Sambal Rujak Berbahan :".$rujak;
echo "<br>";

//contoh Implode 2
$telp = ["0274", "391019"];
$no_telp = implode ("-",$telp);
echo "Nomor Telepon :".$no_telp;
echo "<br>";

//contoh Implode 3
$acak ["3", "4", "7", "1", "6", "9"];
$no_undian = implode (" ",$acak)
echo "Nomor Undian :".$no_undian;
echo "<br>";

//contoh Implode 3
$acak ["3", "4", "7", "1", "6", "9"];
$no_undian = implode (" ",$acak)
echo "Nomor Undian :".$no_undian;
echo "<br>";

//contoh Implode 4
$hewan ["Sapi", "Kerbau", "Kuda", "Gajah", "Jerapah"];
$kakiempat = implode ("|",$hewan)
echo "Nomor Undian :".$kakiempat;
echo "<br>";

//contoh Implode 5
$tersangka ["Andri", "Bagong", "Jarko", "Sanipo"];
$alias = implode ("/",$tersangka)
echo "Nama Tersangka / Alias :".$alias;
echo "<br>";
?>