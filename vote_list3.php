<?php include $_SERVER["DOCUMENT_ROOT"].'/include/top.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

<style>
#listtable{
 width: 800px;
}
</style>


<section> 
<br><br>
<center><font size=5><b>인기투표결과</b></font></center>
<br>
<div align=center>

<br>
<div class="chart-div" align=center >
 <canvas id="pieChartCanvas" width="500px" height="350px"></canvas>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "alsrn9285";
$dbname = "jungbo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT idx, name, col FROM pool where name='둘리' ";
$result = $conn->query($sql);
$row1 = $result->fetch_assoc();

$sql = "SELECT idx, name, col FROM pool where name='하니'  ";
$result = $conn->query($sql);
$row2 = $result->fetch_assoc();

$sql = "SELECT idx, name, col FROM pool where name='시바견'  ";
$result = $conn->query($sql);
$row3 = $result->fetch_assoc();

$sql = "SELECT idx, name, col FROM pool where name='똘이'  ";
$result = $conn->query($sql);
$row4 = $result->fetch_assoc();

$sql = "SELECT idx, name, col FROM pool where name='사나'  ";
$result = $conn->query($sql);
$row5 = $result->fetch_assoc();
 
$p1 = $row1['col'];
$p2 = $row2['col'];
$p3 = $row3['col'];
$p4 = $row4['col'];
$p5 = $row5['col'];

$conn->close();

?>
</div>
<br>
</section>

<script>
					window.onload = function () {
						pieChartDraw();
					}
					 var data_tbl = {
						  table: 'listtable'
					   };

					let pieChartData = {
						labels: ['둘리(<?=$p1?>)', '하니(<?=$p2?>)', '시바견(<?=$p3?>)', '똘이(<?=$p4?>)', '사나(<?=$p5?>)'],
						datasets: [{
							data: [<?=$p1?>,<?=$p2?>,<?=$p3?>,<?=$p4?>,<?=$p5?>],
							backgroundColor: ['rgb(255, 0, 0)', 'rgb(255, 159, 64)', 'rgb(255, 205, 86)', 'rgb(75, 192, 192)', 'rgb(54, 162, 235)', 'rgb(153, 102, 255)'
							,'rgb(203, 190, 255)']
						}] 
					};

					let pieChartDraw = function () {
						let ctx = document.getElementById('pieChartCanvas').getContext('2d');
						
						window.pieChart = new Chart(ctx, {
							type: 'pie',
							data: pieChartData,
							options: {
								responsive: false
							}
						});
					};

</script>



<?php include $_SERVER["DOCUMENT_ROOT"].'/include/footer.php';?>