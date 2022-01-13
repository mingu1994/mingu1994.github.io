<?php include $_SERVER["DOCUMENT_ROOT"].'/include/top.php';?>

<section>

		<br>
		<center>
			<font size=5><b>투표결과 조회</b></font>
		</center>
		<div align =center>
		<?php
$servername = "localhost";
$username = "root";
$password = "alsrn9285";
$dbname = "jungbo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql_tc = "SELECT sum(col) as tc FROM pool";
$result_tc = $conn->query($sql_tc);
$row_tc=$result_tc->fetch_assoc();

$sql = "SELECT * FROM pool";
$result = $conn->query($sql);


?>

<?
if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table align = "center" border=1 width=500 height=100>
	<tr>
	<th>순번</th>
	<th>이름</th>
	<th>인기도(<?=$row_tc['tc']?>명)</th>
	<th>득표율</th>
	
</tr>
<?


  while($row = $result->fetch_assoc()) {
	
	$votes= round(($row['col'] / $row_tc['tc'])*100, 1);
	 ?>

	  <tr align = "center">
    <td ><?=$row["idx"]?></td>
	<td><?=$row["name"]?></td>
	<td><?=$row["col"]?></td>
	<td><?=$votes?>%</td>
  </tr>
	<?
  }
  ?>
  </table>
  <?
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
	</section>


	<?php include $_SERVER["DOCUMENT_ROOT"].'/include/footer.php';?>