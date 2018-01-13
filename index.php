<html>
	<head>
		<title>Ejercicio Fizzmod</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Main css -->
		<link rel="stylesheet" href="/assets/css/main.css">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<!-- Font Awesoma -->
		<link rel="stylesheet" href="assets/css/font-awesome.css">
	</head>

	<body>
		<div class="text-center mg-top-50">
			<img src="http://fizzmod.com/images/fizzmod_web_design.png" alt="Logo">
		</div>

		<div class="container mg-top-75">
			<label for="productId">Id de producto</label>
			<input type="number" name="productId" id="productId" />
			<input id="search-product-btn" type="button" class="btn btn-primary consult" value="CONSULTAR" />
			<input id="see-all-products" type="button" class="btn btn-primary see-all" value="VER TODOS" />
			<input type="button" class="btn btn-primary see-all pull-right" onclick="loadProducts()" value="CARGAR PRODUCTOS EN DB" />
			<br>
			<label class="loader" for="">Cargando...</label>
			<div id="result" class="mg-top-50">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>

		<footer class="text-center">
			<p>Github:
				<a href="https://github.com/juanmusto/fizzmod">Repo</a>.
			</p>
			<p>Contacto:
				<a href="mailto:jmmusto4@gmail.com">jmmusto4@gmail.com</a>.
			</p>
		</footer>

	</body>
	<!-- CDN jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<!-- Main Js -->
	<script src="/assets/js/main.js"></script>

</html>
