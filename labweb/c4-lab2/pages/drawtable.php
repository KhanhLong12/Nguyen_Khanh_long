
<span>Trang DrawTable</span><br>
<span>Form vẽ bảng:</span>
<form method="POST" action="">
	<table>
		<tr>
			<td>Số dòng:</td>
			<td><input type="number" name="dong"></td>
		</tr>
		<tr>
			<td>Số cột:</td>
			<td><input type="number" name="cot"></td>
		</tr>
	</table>
	<input type="reset" name="reset" value="Nhập lại">
	<input type="submit" name="sm" value="Vẽ">
</form>
<br>

<?php
	if(isset($_POST['sm'])){
		$dong = $_POST['dong'];
		$cot = $_POST['cot'];
 ?>
<table border="1" width="500">
	<?php 
		for($i=0;$i<$dong;$i++){
	?>
	<tr>
		<?php
			for($j=0;$j<$cot;$j++){
				
		?>
		<td><?php
		if($j<=$i){ echo $j +1; }?></td>
		<?php
		}
	 	?>
	</tr>
	<?php
	} ?>
	
</table>
<?php } ?>