<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="./js/vue.global.js"></script>

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
	
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="icon" type="image/x-icon" href="/svg/invoice.svg">
	<title>CSV Reader</title>
</head>
<body>
	<div class="navigation shadow">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand">
					<div class="nav navbar-nav float-end">
						<a class="nav-item nav-link active text-white" href="https://www.regideso-rdc.com/" aria-current="page">Acceuil <span class="visually-hidden">(current)</span></a>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<br><br>
	<div class="container" id="app">
		<h3>Verifier et payer ses factures</h3>
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="mb-3">
					<input type="text" class="form-control" v-model="info.numClient"  placeholder="Numero client"><br>
					
					<input class="form-control" list="browsers"  v-model = "info.province" placeholder="Province">
					<datalist id="browsers" >
					<option value="Kinshasa">Kinshasa</option>
								<option value="Equateur">
								<option value="Sud-Ubangui">
								<option value="Nord-Ubangui">
								<option value="Mongala">

								<option value="Bas-Uele">
								<option value="Haut-Uele">
								<option value="Ituri">
								<option value="Kongo_Central">
								<option value="Mai-Ndombe">

								<option value="Kwilu">
								<option value="Kwango">
								<option value="Tshuapa">
								<option value="Tshopo">
								<option value="Sankuru">

								<option value="Kasaï">
								<option value="Kasaï Oriental">
								<option value="Kasaï Central">
								<option value="Lomani">
								<option value="Nord Kivu">

								<option value="Sud kivu">
								<option value="Maniema">
								<option value="Tanganyika">
								<option value="Lualaba">
								<option value="Haut-Katanga">

								<option value="Haut-Lomami">
					</datalist>
					<br>
					<button class="btn btn-success form-control" @click="get_data()">Verifier</button>
				</div>
			</div>
			<div class="col-md-8 scroll">
				<div class="card p-4 bg-success text-white m-2" v-if="factures === undefined">
					<h4>vos factures s'afficherons ici</h4>
				</div>

				<div class="" v-for="facture in factures">
					<div class="p-4 m-2 shadow rounded">
						<h4>N° {{ facture.numFact }} </h4>
						<hr>
						<p> Montant de la facture : {{ facture.montantFact }} </p>
						<p> Solde : {{ facture.solde }} </p>
						<p> Periode : {{ facture.periodeFact }} </p>
						<button class="btn btn-success" onclick="alert('Systeme de paiement')">Payer la facture</button>
					</div>
					<br>
				</div>

				<div class="rounded p-4 bg-danger shadow-lg text-white m-2" v-if="no_data === true">
					<h4> {{ msg }} <br>Reesayez avec des bonnes information</h4>
				</div>
				
			</div>
		</div>
	</div>

	<div class="container-fliud">
		<div class="ocean">
			<div class="wave"></div>
		</div>
	</div>
	
	<script src="./js/app.js"></script>

</body>
</html>
