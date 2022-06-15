<!DOCTYPE html>
<html>
<head>

	<title>Inserir</title>

		  <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
   
<body>
       
    <h1>Inserir</h1>

<main>
	<div class="container">
		<form class="row g-3">
  <div class="col-md-4">
    <label>Título</label>
    <input type="text" class="form-control is-valid" name="title" required>
    <div class="valid-feedback">
 
    </div>

  </div>
  <div class="col-md-4">
    <label>Data</label>
    <input type="date" class="form-control is-valid" name="data" required>
    <div class="valid-feedback">
  
    </div>

  </div>
  <div class="col-md-4">
    <label>Descrição</label>
    <div class="input-group has-validation">
      <input type="text" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="description" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
        
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label>Imagem</label>
    <input type="file" id="formGroupExampleInput3" placeholder="Insira uma imagem" name="image"/>

	</div>

</main>

</body>

</html>