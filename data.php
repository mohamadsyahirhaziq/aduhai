 <?php
 include("config.php");
 ?>
 <head>
 <style>
 table,tr,th,td{
	 border:1px solid black;
	 padding:5px;
 }
 </style>
 </head>
 
 <body>
 <table>
 <th>BIL</th>
 <th>NAMA</th>
 <th>NOMBOR IC</th>
 <th>JANTINA</th>
 <?php
 $no=1;
 $ambil=mysql_query("SELECT * FROM jantina INNER JOIN akaun ON jantina.nojantina=akaun.nojantina");
 
 while($data=mysql_fetch_array($ambil)){
	 ?>
<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['nama'];?></td>
<td><?php echo $data['noic'];?></td>
<td><?php echo $data['jantina'];?></td>
 <?php } ?>
 </table>
 </body>