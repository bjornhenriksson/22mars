<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale = 1.0, user-scalable = no">
	<title>22mars | Nyval</title>
	<meta name="description" content="22 mars är det dags för nyal">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="//use.typekit.net/rfq1osc.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>
<body>

<?php 

include 'conn.php';

?>

<div class="timeline">

<?php foreach($db->query("SELECT * FROM nyval ORDER BY id DESC") as $row): ?>

	<div class="article">
		<h2><?php echo $row['title']; ?></h2><br />
		<?php echo $row['image']; ?>
		<a class="button" href="<?php echo $row['link']; ?>">Läs mer</a>
	</div><br />

<?php endforeach; ?>

</div>

</body>
</html>
