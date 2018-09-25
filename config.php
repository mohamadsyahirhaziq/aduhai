 <?php
 mysql_connect("localhost","root","123456")or die(mysql_error());
 mysql_select_db("inner")or die(mysql_error());
 $sql="SELECT * FROM jantina INNER JOIN akaun ON jantina.nojantina=akaun.nojantina";
 $data=mysql_query($sql)or die(mysql_error());
 ?>