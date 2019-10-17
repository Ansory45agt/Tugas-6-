<?php
// mengambil data dari yang dikirim
echo $_GET['nama1'];
// memberi break atau enter
echo "<br />";
// mengambi data dari url
echo $_GET['email'];
echo "<br />";
echo $_GET['TL'];
 echo "<br/>";
if(isset($_GET['submit']))
//Saat tombol submit ditekan maka kondisi IF pada isset($_Get[‘submit’])
//terpenuhi dan dilanjutkan dengan mengecek kondisi input checkbox dengan perintah 
//if (isset($_get[‘check1’])).
//Jika kondisi terpenuhi (input checkbox dicentang) maka akan ditampilkan value,dari input checkbox yaitu “Setuju”. Jika input checkbox tidak dicentang akan
//tampil “tidak setuju”.


{
  if (isset($_GET['check1']) AND isset ($_GET['nama1']))
   {
  echo $_GET['check1'] ;
  }
  else echo "tidak setuju";
}


?>