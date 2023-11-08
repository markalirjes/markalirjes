<html>
<head>
<title>FACEMASH FOR ATU</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/fe459689b4.js"></script>
<link rel="stylesheet" href="style.css">
<?php 
	session_start();
	require 'connection.php';
	$post = mysqli_query($conn , "SELECT * FROM faceimg WHERE id=1");
	$post2 = mysqli_query($conn , "SELECT * FROM faceimg WHERE id=2");
	$req = mysqli_fetch_array($post);
	$req1 = mysqli_fetch_array($post2);
	$_SESSION['addr'] = $req['addr'];
	$_SESSION['addr1'] = $req1['addr'];
	?>
</head>
<body>
<div id="header">
	<h1><a href="index.html">FACEMASH</a></h1>
</div>
<div id="main">
	<h3>Were we let in for our looks? No. Will we be judged on them? Yes.</h3>
	<h2>Who's Hotter? Click to Choose.</h2>
	<table>
<script>
	function m(){
		let img = "<?php echo $_SESSION['addr']; ?>";
		"<?php
		$last = mysqli_query($conn , "SELECT * FROM faceimg WHERE addr != '".$_SESSION['addr']."'");
		$requ = mysqli_fetch_array($last);

		$_SESSION['addr1'] = $requ['addr']; ?>"
	}
	function t(){
		let img1 = "<?php echo $_SESSION['addr1']; ?>";
		"<?php
			$last1 = mysqli_query($conn , "SELECT * FROM faceimg WHERE addr != '".$_SESSION['addr1']."'");
			$requ1 = mysqli_fetch_array($last1);

			$_SESSION['addr'] = $requ1['addr']; ?>"
	}
</script>
		<tr>
			<td><img  onclick="m()" src="<?php echo $_SESSION['addr']; ?>"/></td>
			<td>OR</td>
			<td><img  onclick="t()" src="<?php echo $_SESSION['addr1']; ?>"/></td>
		</tr>
	</table>
</div>
<div id="footer">
	<a href="rankings.html">Rankings</a>
    <a href="rankings.html">Upload A Person</a>
</div>

</body>
</html>