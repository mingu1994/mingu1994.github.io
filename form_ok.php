<?php
 include $_SERVER["DOCUMENT_ROOT"].'/include/top.php';
$code = $_REQUEST["code"];
$name = $_REQUEST["name"];
$price = $_REQUEST["price"];
$quantity = $_REQUEST["quantity"];
$etc = $_REQUEST["etc"];

$mfile = $_FILES["img"]["name"];
$tmp = $_FILES["img"]["tmp_name"];

echo "학번:".$code."<br>";
echo "사진1:".$mfile."<br>";
echo "사진2:".$tmp."<br>";

move_uploaded_file($tmp, "./uploads/$mfile");

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

$sql = "INSERT INTO shopping (code, name, price, quantity, etc, img)
VALUES ('$code', '$name', '$price', '$quantity', '$etc', '$mfile')";

if ($conn->query($sql) === TRUE) {
  echo "저장완료!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php include $_SERVER["DOCUMENT_ROOT"].'/include/footer.php';?>