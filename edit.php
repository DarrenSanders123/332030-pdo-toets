<?php
include "DatabaseController.php";
$db = new DatabaseController();
$db->query("SELECT * FROM pizza WHERE id = :id");
$db->bind(':id', $_GET['id']);
$item = $db->single();

$kruiden0 = false;
$kruiden2 = false;
$kruiden3 = false;
$kruiden4 = false;

foreach (json_decode($item['kruiden']) as $kruid) {
	switch ($kruid) {
		case "peterselie":
			$kruiden0 = true;
			break;
		case "oregano":
			$kruiden2 = true;
			break;
		case "chili flakes":
			$kruiden3 = true;
			break;
		case "zwarte peper":
			$kruiden4 = true;
			break;
	}
}

?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Material kit CSS -->
        <!-- Bootstrap CSS -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
              crossorigin="anonymous">

        <title>PDO Workbench</title>
    </head>
    <body>
    <div class="container" style="width: 45rem">
        <h1 class="text-center">Edit the pizza</h1>
	    <form class="d-flex flex-column align-items-center" method="post" action="update.php">
		    <input hidden name="id" value="<?=$_GET['id']?>">

		    <div class="row" style="width: 100%; margin-top: 5px">
			    <label>Bodemformaat
				    <select name="bodem-formaat" class="form-select">
					    <option value="20" <?=$item['bodemFormaat'] == "20" ? "selected" : "" ?>>20 centimeter</option>
					    <option value="25" <?=$item['bodemFormaat'] == "25" ? "selected" : "" ?>>25 centimeter</option>
					    <option value="30" <?=$item['bodemFormaat'] == "30" ? "selected" : "" ?>>30 centimeter</option>
					    <option value="35" <?=$item['bodemFormaat'] == "35" ? "selected" : "" ?>>35 centimeter</option>
					    <option value="40" <?=$item['bodemFormaat'] == "40" ? "selected" : "" ?>>40 centimeter</option>
				    </select>
			    </label>
		    </div>
		    <div class="row" style="width: 100%; margin-top: 5px">
			    <label>Saus
				    <select class="form-select" name="saus">
					    <option value="tomatensaus" <?=$item['saus'] == "tomatensaus" ? "selected" : "" ?>> Tomatensaus </option>
					    <option value="extra tomatensaus" <?=$item['saus'] == "extra tomatensaus" ? "selected" : "" ?>> Extra tomatensaus </option>
					    <option value="spicy tomatensaus" <?=$item['saus'] == "spicy tomatensaus" ? "selected" : "" ?>> Spicy tomatensaus </option>
					    <option value="bbq saus" <?=$item['saus'] == "bbq saus" ? "selected" : "" ?>> BBQ saus </option>
					    <option value="creme fraiche" <?=$item['saus'] == "creme fraiche" ? "selected" : "" ?>> Creme fraiche </option>
				    </select>
			    </label>
		    </div>
		    <div class="row" style="width: 100%; margin-top: 5px">
			    <label>Pizzatoppings
				    <div class="form-check" style="margin-top: 5px">
					    <input class="form-check-input" type="radio" name="topping" <?=$item['toppings'] == "vegan" ? "checked" : "" ?> value="vegan" id="vegan">
					    <label class="form-check-label" for="vegan">
						    vegan
					    </label>
				    </div>

				    <div class="form-check">
					    <input class="form-check-input" type="radio" name="topping" <?=$item['toppings'] == "vegetarisch" ? "checked" : "" ?>  value="vegetarisch" id="vegetarisch">
					    <label class="form-check-label" for="vegetarisch">
						    vegetarisch
					    </label>
				    </div>

				    <div class="form-check">
					    <input class="form-check-input" type="radio" name="topping" <?=$item['toppings'] == "vlees" ? "checked" : "" ?>  value="vlees" id="vlees">
					    <label class="form-check-label" for="vlees">
						    vlees
					    </label>
				    </div>
			    </label>
		    </div>
		    <div class="row" style="width: 100%; margin-top: 5px">
			    <label>Kruiden
				    <div class="form-check">
					    <input class="form-check-input" type="checkbox" name="kruiden0" <?=$kruiden0 ? "checked" : "" ?> value="peterselie" id="peterselie">
					    <label class="form-check-label" for="peterselie">
						    Peterselie
					    </label>
				    </div>
				    <div class="form-check">
					    <input class="form-check-input" type="checkbox" name="kruiden2" <?=$kruiden2 ? "checked" : "" ?> value="oregano" id="oregano">
					    <label class="form-check-label" for="oregano">
						    Oregano
					    </label>
				    </div>
				    <div class="form-check">
					    <input class="form-check-input" type="checkbox" name="kruiden3" <?=$kruiden3 ? "checked" : "" ?> value="chili flakes" id="chili-flakes">
					    <label class="form-check-label" for="chili-flakes">
						    Chili flakes
					    </label>
				    </div>
				    <div class="form-check">
					    <input class="form-check-input" type="checkbox" name="kruiden4" <?=$kruiden4 ? "checked" : "" ?> value="zwarte peper" id="zwarte-peper">
					    <label class="form-check-label" for="zwarte-peper">
						    Zwarte peper
					    </label>
				    </div>
			    </label>
		    </div>
		    <div class="row mb-2" style="width: 100%;">
			    <div class="col gap-2">
				    <button class="btn btn-danger" type="button" name="back" value="back" style="width: 49%"
				            onclick="window.location.href = './show.php' ">Back
				    </button>
				    <button class="btn btn-primary" type="submit" name="submit" style="width: 49%" value="Submit">Save</button>
			    </div>
		    </div>
	    </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <script>
        function back() {
            window.back();
        }

    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>
    </html>

<?php
