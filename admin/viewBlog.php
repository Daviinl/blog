<?php 

include_once('../config/connection.php');

$id = $_GET['id'];

$stmt = $connect->prepare('SELECT id, title,description FROM posts WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!-- aqui entra o HTML, chame o Boostrap → -->

<!DOCTYPE html>
<html>
<head>
	<title>viewBlog</title>

	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>

<body>


</body>

</html>


<?php foreach($results as $post): ?>
		<h1><?= $post["title"] ?></h1>
		<p><?= $post["description"] ?></p>
<?php endforeach; ?>
