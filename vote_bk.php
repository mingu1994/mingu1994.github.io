<?php include $_SERVER["DOCUMENT_ROOT"].'/include/top.php';?>

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


?>

<section>
    <br>
    <?
		$sql = "SELECT * FROM pool";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  ?>

    <center>
        <font size="5">
            <b>학생인기투표</b>
        </font>
    </center>

    <div align="center">
        <form
            name="f1"
            action="pool_ok.php"
            onsubmit="return ch1()"
            method="post"
            enctype="multipart/form-data">
            <table border="1" width="200" height="300">
                <font size="6">
                    <tr>
                        <th width=80>순번</th>
                        <th width =100>이름</th>
                        <th>선택</th>
                        
                    </tr>
                    <caption id='caption1'>
                        <font size="6">인기투표하기</font>
                    </captionc>
                    <?		
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
    <td align="center">&nbsp;<?=$row['idx'] ?></td>
	<td align="center">&nbsp;<?=$row['name'] ?></td>
	<td input type="radio"  name="a" value= "<?=$row['idx']?>"></td>
	</tr>
    <?
  }
} else {
  echo "0 results";
}

$conn->close();
		
		
?>

                    <tr>
                        <td colspan="3" align="center"><input type="submit" value="투표하기">
					</tr>
                        </table>
                    </form>
                </div>
            </section>
            <?php include $_SERVER["DOCUMENT_ROOT"].'/include/footer.php';?>