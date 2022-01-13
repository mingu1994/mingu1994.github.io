<?php include $_SERVER["DOCUMENT_ROOT"].'/include/top.php';?>
<section>
		<br>
		<center>
			<font size=5><b>상품등록하기</b></font>
		</center>
		<script>
		function ch1(){
			if( f1.code.value ==""){
			alert("코드를 입력해 주세요.");
			return false;
		}
		if( f1.name.value ==""){
			alert("이름을 입력해 주세요.");
			return false; 
		}
		if( f1.price.value ==""){
			alert("가격을 입력해 주세요.");
			return false;
		}
		}
	</script>
		<div align =center>
		<form name="f1"action="form_ok.php" onSubmit="return ch1()" method="post" enctype="multipart/form-data">
		<table border=1 height =300>
			<tr><td>&nbsp; 코드 </td><td> <input type=text name="code"></td></tr>
			<tr><td>&nbsp; 이름 </td><td> <input type=text name="name"></td></tr>
			<tr><td>&nbsp; 가격 </td><td> <input type=text name="price"></td></tr>
			<tr><td>&nbsp; 갯수 </td><td> <input type=text name="quantity"></td></tr>
			<tr><td>&nbsp; 기타 </td><td> <textarea cols=40 rows=4 name="etc"></textarea></td></tr>
			<tr><td>&nbsp; 이미지 </td><td> <input type=file name="img"></td></tr>
		<tr><td colspan=2 align="center"><input type="submit" value="저장하기">
		<input type="reset" value="다시작성"></td></tr>
</table>
</form>
</div>
	</section>
	<?php include $_SERVER["DOCUMENT_ROOT"].'/include/footer.php';?>