<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Živi ljudi - forum</title>
</head>
<body>
	<div id="mainDiv">
		<header>
			<div id="menuWrap">
				<h2>Prȁvo právo forum</h2>
				<div class="menu">
					<ul>
						<li><a href="loginForm.php"> Log in / Registiraj se </a></li>
						<li><a href="forum.php"> Forum </a></li>
						<li><a href="index.php"> Naslovna </a></li>
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div> <!-- end menuWrap -->
			<form class="searchContainer">
					<input type="text" placeholder="Search.." name="search">
	      			<button type="submit"><i class="fa fa-search"></i></button>
      		</form>
      		<div style="clear: both;"></div>
		</header>

		<div id="allContent">
			<div class="teme med">
				<a href="med.php"><h5> MEDICINA </h5></a>
			</div>
			<div class="teme mup">
				<a href="mup.php"><h5> MUP </h5></a>
			</div>
			<div class="teme sudovi">
				<a href="sudovi.php"><h5> SUDOVI </h5></a>
			</div>
			<div class="teme ud"> 
				<a href="ud.php"><h5> BANKE / <br> UTJERIVAČI DUGOVA </h5></a>
		    </div>
			<div class="teme ostalo">
				<a href="ostalo.php"><h5> OSTALO </h5></a>
			</div>


			
		</div> <!-- end allContent  -->
	</div> <!-- END mainDiv -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>