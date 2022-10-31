<?php
include "db.php";

function setnominal($data){
	$rnominal=number_format($data,0,",",".");
	return $rnominal;	
	}


	
	$id = $_GET['id'];
	$st="
	SELECT `idtiket`, `kodetiket`, `kodebus`, `namapembeli`, `tglberangkat`, `waktuberangkat`, `waktusampai`, `harga`, `nokursi`, `kelas`, `tujuan`, `umum`, `lansia`, `total` FROM `tiket` WHERE `idtiket`='$id'
	";
	
	//echo $st;
	$qdata=mysqli_fetch_assoc(mysqli_query($db,$st));
	
	if($qdata['idtiket']!=""){
		
	
	
	?>

<html>
<head>
<style type="text/css">
*{
margin:5; 
padding :5;

}
body{
	font-family:"arial", Courier, monospace;
}
table{
	font-size:12px;
	margin : 0px 0px 0px 0px;
	border-collapse: collapse;
}
h3 {font-size:16px;}
th {font-size:12px;}
.bg1 {background-color:#c9b1e0;}
.bg2 {background-color:#E3D3D3;}
.tr{
	border : 1px solid black;
	border-spacing : 1px;
	font-size:12px;
}
.kecil {font-size:10px;}
.break{
page-break-before:always
}
.after{
page-break-after:always
}

</style>
</head>
<body onload='window.print()'>

<table width='35%' border=1>
<tr>
<th colspan='2' align='center'>
<h2><b>Bukti Reservasi </br>
Tiket Bus AKAP</b></h2>
</th>
</tr>

<tr>
<td width="30%">ID Reservasi</td>
<td width="50%"><?php echo ": $qdata[idtiket]";?></td>
</tr>



<tr>
<td>Nama Lengkap</td>
<td><?php echo ": $qdata[namapembeli]";?></td>
</tr>


<tr>
<td>Kelas Penumpang</td>
<td>Bisnis</td>
</tr>

<tr>
<td>Jumlah Penumpang</td>
<td><?php echo": ".($qdata['umum']+$qdata['lansia'])." Orang";?></td>
</tr>

<tr>
<td>Jumlah Penumpang Lansia</td>
<td><?php echo ": $qdata[lansia]";?></td>
</tr>



<tr>
<td>Total Bayar</td>
<td><?php echo ": Rp. ".setnominal($qdata['total']);?></td>
</tr>

</body>
</html>
<?php
}
else{
//echo"<script>alert('data tidak ditemukan!'); window.close()</script>";
	echo"tidak ketemu";									
}

?>