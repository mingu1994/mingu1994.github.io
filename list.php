<?php include $_SERVER["DOCUMENT_ROOT"].'/include/top.php';?>

<section>

		<br>
		<center>
			<font size=5><b>상품조회</b></font>
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

$sql = "SELECT code, name, price, quantity, etc, img FROM shopping";
$result = $conn->query($sql);
?>

<?
if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table border=1 width=500 height=100>
	<tr>
	<th>상품코드</th>
	<th>상품이름</th>
	<th>가격</th>
	<th>수량</th>
	<th>설명</th>
	<th>이미지</th>
</tr>
<?


  while($row = $result->fetch_assoc()) {
	
	
	 ?>

	  <tr>
    <td><?=$row["code"]?></td>
	<td><?=$row["name"]?></td>
	<td><?=number_format($row["price"])?></td>
	<td><?=$row["quantity"]?></td>
	<td><?=$row["etc"]?></td>
	<td><img src=./uploads/<?=$row["img"]?> width=100 height=60</td>
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