<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>i244, Andrei Pugatšov, ülesanne 8-1</title>	
</head>

<body>

<p>
	<form  action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
		<p><input type = "text" name = "texttest"><label for="texttest"> Text to test with</label></p>
		<p><input type = "color" name = "colortext" value="#ff0000"> <label for="colortext">Text color</label></p>
		<p><input type = "color" name = "colorbg" value="#00ff00"> &nbsp; Background color</p>
		<fieldset>
			<legend>Border</legend>
			<p><input type = "number" min = "1" max = "20" name="bordersize"><label for="bordersize">Border size (0 - 20px)</label></p>
			<select name="borderstyle">
				<option value="solid">Solid</option>
				<option value="dotted">Dotted</option>
				<option value="dashed">Dashed</option>				
				<option value="double">Double</option>
				<option value="none">None</option>
			</select>		
			<p><input type = "color" name = "bordercolor"><label for="bordercolor">Border color</label></p>
			<p><input type = "number" name = "borderradius" min = "0" max = "100"><label for="borderradius">Border radius</label></p>
		</fieldset>
		<p><button type = "submit" name = "buttonsubmit">Let it be!</button></p>		
	</form>
</p>


<?php
	$texttest = " ";
	$colortext="#000"; // vaikimisi valge
	$colorbg="#fff";
	$bordercolor="#000";
	$bordersize=1;
	$borderstyle="solid";
	
	if (isset($_POST['colortext']) && $_POST['colortext']!="") {
		$colortext=htmlspecialchars($_POST['colortext']);		
	}
	if (isset($_POST['colorbg']) && $_POST['colorbg']!="") {
		$colorbg=htmlspecialchars($_POST['colorbg']);		
	}
	if (isset($_POST['bordersize']) && $_POST['bordersize']!="") {
		$bordersize=htmlspecialchars($_POST['bordersize']);	
	}
	if (isset($_POST['borderstyle']) && $_POST['borderstyle']!="") {
		$borderstyle=htmlspecialchars($_POST['borderstyle']);	
	}
	if (isset($_POST['bordercolor']) && $_POST['bordercolor']!="") {
		$bordercolor=htmlspecialchars($_POST['bordercolor']);	
	}
	if (isset($_POST['borderradius']) && $_POST['borderradius']!="") {
		$borderradius=htmlspecialchars($_POST['borderradius']);	
	}
	if (isset($_POST['texttest']) && $_POST['texttest']!="") {
		$texttest=htmlspecialchars($_POST['texttest']);	
	}
?>

<p style="color : <?php echo $colortext;?>;
		background-color : <?php echo $colorbg;?>;
		border : <?php echo $bordersize?>px <?php echo $borderstyle?> <?php echo $bordercolor;?>;
		border-radius : <?php echo $borderradius;?>px;
		width : 300px;
		height : 300px;
		padding : 30px 30px 30px 30px;
		">
	<?php echo $texttest;?>
</p>

</body>

</html>
