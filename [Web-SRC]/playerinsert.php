<?php
 $db_host = "localhost"; 
 $db_user = "root"; 
 $db_pw ="snowwooden12";
 $db_name = "gamemanager";
 
 $conn=mysql_connect($db_host,$db_user,$db_pw);
 $db=mysql_select_db($db_name);
 
 if (!$db){
	 echo("DB 연결 오류");
	 echo "<br/><br/><br/>";
 }
 $pPNUM=$_POST['PNUM'];
 $pPNAME=$_POST['PNAME'];
 $pLevel=$_POST['Level'];
 $pServer=$_POST['Server'];
 

mysql_query("INSERT INTO player VALUES ('$pPNUM','$pPNAME','$pLevel','$pServer')",$conn);
echo "player 테이블";
echo'<br><br>';

$result=mysql_query("SELECT * FROM player",$conn);
echo "<table width='500' align='center'>
<tr bgcolor='skyblue'>
<th>PNUM</th>
<th>PNAME</th>
<th>Level</th>
<th>Server</th>
</tr>"; 

while($row=mysql_fetch_array($result)){
	echo"<tr>";
	echo "<td>".$row['PNUM']."</td>";
	echo "<td>".$row['PNAME']."</td>";
	echo "<td>".$row['Level']."</td>";
	echo "<td>".$row['Server']."</td>";
	echo"</tr>";
}
echo"</table>";

 ?>