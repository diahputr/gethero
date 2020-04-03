<?php 
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
 $fnama = $_GET['fnama'];
 $lalamat = $_GET['lalamat'];
 $talamat = $_GET['talamat'];
 echo "<span class='success'><b>Sukses</b></span><br/>";
 echo "Nama : ".$fnama."<br/>Alamat Penjemputan : ".$lalamat"<br/>Alamat Tujuan: ".$talamat;
}
?>
