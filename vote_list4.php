<? include $_SERVER["DOCUMENT_ROOT"]."/include/top.php" ?>

<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script> 
<script src="http://code.highcharts.com/modules/data.js"></script>     


<style>
#datatable{
 width: 300px;
 height:150px;
}
</style>


<section> 
<div  align="center"> 



    <br>
    <h2> 투표결과보기  <a href=vote.php>(투표하기)</a>  </h2> 
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "alsrn9285";
    $dbname = "jungbo";

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

<table border=1 width=500 id='datatable'>

        <tr align=center> <td> 투표 제목 </td> <td> 투표 결과  </td> </tr>
        <tr align=center> <td> 둘리 </td>    <td>  <?=$p1 ?> </td> </tr>
        <tr align=center> <td> 하니 </td>    <td>  <?=$p2 ?> </td> </tr>
        <tr align=center> <td> 시바견 </td>  <td>  <?=$p3 ?> </td> </tr>
        <tr align=center> <td> 똘이 </td>    <td>  <?=$p4 ?> </td> </tr>
		<tr align=center> <td> 사나 </td>    <td>  <?=$p5 ?> </td> </tr>

</table>
<br> 

    <div id="container" style="width: 450px; height: 250px; margin: 10 auto;"></div>
<br>
</div>
</section>

<script language="JavaScript">
    $(document).ready(function() { 
        var data = {
            table: 'datatable'
        };
        var chart = {
            type: 'column'
        };
        var title = {
            text: '학생 인기 투표'   
        };      
        var yAxis = {
            allowDecimals: false,
            title: {
            text: '투표수'
            }
        };
        var tooltip = {
            formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
            this.point.y + ' ' + this.point.name.toLowerCase();
            }
        };
        var credits = {
        enabled: false
        };  

        var json = {};   
        json.chart = chart; 
        json.title = title; 
        json.data = data;
        json.yAxis = yAxis;
        json.credits = credits;  
        json.tooltip = tooltip;  
        $('#container').highcharts(json);
    });
</script>

<? include $_SERVER["DOCUMENT_ROOT"]."/include/footer.php" ?>
