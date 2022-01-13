<?php include $_SERVER["DOCUMENT_ROOT"].'/include/top.php';?>

<style>
table{
 width: 350px;
 height:200px;
}
td {
  text-align: center ;
}

</style>

<section> 
<br>

<div  align="center"> 
    <br><br>
 <form name=f1  action="pool_ok.php" method="get" >
 <table border=1>
 <caption id="caption1" ><font size=6> 인기투표하기 </font> </caption>   
 <tr><td > 둘&emsp;리 </td><td><input  type=radio  name="a" value="1" > </td></tr>
 <tr><td > 하&emsp;니 </td><td><input  type=radio  name="a" value="2" > </td></tr>
 <tr><td > 영&emsp;심&emsp;이</td><td><input  type=radio  name="a" value="3" > </td></tr>
 <tr><td > 똘&emsp;이 </td><td><input  type=radio  name="a" value="4" > </td></tr>
 <tr><td > 사&emsp;나 </td><td><input  type=radio  name="a" value="5" > </td></tr>
 <tr><td colspan=2 id="td7" > <input  type=submit value="투표하기" > </td></tr>
 </table>
</form>
</div>

</section>

            <?php include $_SERVER["DOCUMENT_ROOT"].'/include/footer.php';?>