<?php 
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
 $fnama = $_GET['fnama'];
 $lalamat = $_GET['lalamat'];
 echo "<span class='success'><b>Sukses</b></span><br/>";
 echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
?>
