 <!-- Barra de navegação -->
 <?php  include ('nav.php');  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog Davi</title>

  

	  <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Linkagem com o CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

 
      
      
      <nav class="navbar" style="background-color: #000080;">
  <!-- Navbar content -->
      </nav>

  <!-- Slides com as imagens -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/19921.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/lua.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/eclipse.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Cards com as Imagens -->
 <div class="container">
 	<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="images/biomas-brasileiros-fb.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Título1</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/amazonia2_icmbio.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Título2</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/bioma_amazonico.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Título3</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/bioma_amazonico.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Título4</h5>
        
      </div>
    </div>
  </div>
</div>
 </div>
 
</body>
</html>

<?php  include ('footer.php'); ?>