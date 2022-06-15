<?php 

include_once('../config/connection.php');

include_once('session.php');

include_once('header.php');

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description FROM posts WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title>editar</title>
</head>

<body>

<form action="editar-fim.php" method="post" enctype="multipart/form-data">
<?php foreach($results as $post): ?>
	<p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
	<p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
	<p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
<?php endforeach; ?>
	<input type="submit" value="EDITAR">
</form>


</body>

</html>