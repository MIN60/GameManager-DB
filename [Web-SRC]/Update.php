<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Game Manager_1914201 김민정 데이터베이스 과제</title>
 </head>
 <body bgcolor="#EFF2FB">
 <center><font size="30"><strong>Game Manager</strong></font></center>
<br/>
 <center>
 <table border="5" bgcolor="skyblue" width="900" align="center">
 <tr align="center">
    <td><a href="http://localhost/Insert.php">player 등록 </a></td>
    <td><a href="http://localhost/Update.php">player Level업데이트</a></td>
    <td><a href="http://localhost/Delete.php">player 삭제</a></td>
    <td><a href="http://localhost/Table.php">player 테이블 확인</a></td>
  </tr>
  </table>
  </center>
<br/>
<br/>
<form action='playerupdate.php' method="post" target='down'>
<fieldset>
	<legend>player 테이블</legend>
	<ul>
	  <li>변경 대상의 PNUM :  <input type='text' name='PNUM'></li><br>
	  <li>변경할 Level : <input type='text' name='Level' ></li><br>
	</ul>
	<input type='submit' value='Update'></input>
	<input type='reset' value='취소'></input>
</fieldset>
</form>
<br/>
<p align="center"><strong>★Update 결과★</strong></p>
<center>
<iframe name='down' src='playerupdate.php' frameborder='50'
 width='800' height='400' scrolling='yes'></iframe></center>

 </body>
</html>