<?php

include_once('../config/connection.php');

session_start();
    if($_SESSION['logado'] != true){
        header('Location: index.php');
        die();
    }

    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    }

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>header</title>
</head>

<body>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
                <h2>Bom dia <?php echo $_SESSION['nome']; ?></h2>
                <p><a href="?sair">Deslogar</a></p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-item">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item">Inserir</a>
                    </li>
                </ul>
	   <p><a href="?sair">Deslogar</a></p>
            </nav>



</body>

</html>
