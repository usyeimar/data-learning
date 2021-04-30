<?php
/*
 *@User
 *
 *
 */
//index.php
$host = "localhost";
$user = "root";
$password = "";
$db = "blog_db";



$link = mysqli_connect($host,$user,$password,$db);

$db_consulta = ("SELECT id,title, FROM post");
$query = mysqli_query($link,$db_consulta);

?>
<!doctype html>
<html>
	<head>
		<title>List of Posts</title>
	</head>
	<body>
		<h1>List of Posts</h1>
		<ul>
			<?php while ($row = mysqli_fetch_assoc($query)): ?>
			<li>
				<a href="/show.php?id=<?php echo $row['id'] ?>">
				<?php echo $row['title'] ?>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
		</body>
</html>

<?php
mysqli_close($link);
?>
