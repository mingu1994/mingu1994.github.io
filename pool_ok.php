<?php
$ra1=$_REQUEST["a"];


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

$sql = "UPDATE pool
        SET col= col+1 
        WHERE idx = $ra1";

if ($conn->query($sql) === TRUE) {
  echo "투표결과가 반영되었습니다!";
  
 ?> <!--<h2>   <a href=vote.php>투표하기로 돌아가기</a>  </h2>
  <h2>  <a href=vote_list.php>투표 결과보기</a>  </h2> --></br>
  
  <h2 align=center ><a href=vote.php>재투표</a></br></h2>
  <h2 align=center ><a href=vote_list3.php>투표결과</a></h2>  
	
  <?
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>