<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
	      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Maak je eigen pizza!</title>
</head>
<body>
<div class="container" style="width: 750px">
    <?php
    if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
        echo "<div class='alert alert-success' id='alert' role='alert'>
                Data has been successfully send to the database!
		   </div><script>window.history.pushState({}, document.title, '/pdo_pizza');</script>";
    } elseif (isset($_GET['msg']) && $_GET['msg'] == 'fail') {
        echo "<div class='alert alert-danger' id='alert' role='alert'>
                Something went wrong saving your data!
		   </div><script>window.history.pushState({}, document.title, '/pdo_pizza');</script>";
    }
    ?>
	<h1 class="text-center">Maak je eigen pizza!</h1>
	<br>
	<form class="d-flex flex-column align-items-center" method="post" action="save.php">
		<div class="row" style="width: 100%; margin-top: 5px">
			<label>Bodemformaat
				<select name="bodem-formaat" class="form-select">
					<option value="20">20 centimeter</option>
					<option value="25">25 centimeter</option>
					<option value="30">30 centimeter</option>
					<option value="35">35 centimeter</option>
					<option value="40">40 centimeter</option>
				</select>
			</label>
		</div>
		<div class="row" style="width: 100%; margin-top: 5px">
			<label>Saus
				<select class="form-select" name="saus">
					<option value="tomatensaus"> Tomatensaus </option>
					<option value="extra tomatensaus"> Extra tomatensaus </option>
					<option value="spicy tomatensaus"> Spicy tomatensaus </option>
					<option value="bbq saus"> BBQ saus </option>
					<option value="creme fraiche"> Creme fraiche </option>
				</select>
			</label>
		</div>
		<div class="row" style="width: 100%; margin-top: 5px">
			<label>Pizzatoppings
				<div class="form-check" style="margin-top: 5px">
					<input class="form-check-input" type="radio" name="topping" value="vegan" id="vegan">
					<label class="form-check-label" for="vegan">
						vegan
					</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="radio" name="topping" value="vegetarisch" id="vegetarisch">
					<label class="form-check-label" for="vegetarisch">
						vegetarisch
					</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="radio" name="topping" value="vlees" id="vlees">
					<label class="form-check-label" for="vlees">
						vlees
					</label>
				</div>
			</label>
		</div>
		<div class="row" style="width: 100%; margin-top: 5px">
			<label>Kruiden
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="kruiden0" value="peterselie" id="peterselie">
					<label class="form-check-label" for="peterselie">
						Peterselie
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="kruiden2" value="oregano" id="oregano">
					<label class="form-check-label" for="oregano">
						Oregano
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="kruiden3" value="chili flakes" id="chili-flakes">
					<label class="form-check-label" for="chili-flakes">
						Chili flakes
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" name="kruiden4" value="zwarte peper" id="zwarte-peper">
					<label class="form-check-label" for="zwarte-peper">
						Zwarte peper
					</label>
				</div>
			</label>
		</div>
		<div class="row" style="width: 100%; margin-top: 5px">
			<button class="btn btn-primary" type="submit" value="submit">Bestel</button>
		</div>
	</form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>