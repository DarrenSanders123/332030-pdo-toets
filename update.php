<?php
include "DatabaseController.php";

$kruiden = array();
for ($i = 0; $i < 5; $i++) {
    if (isset($_POST['kruiden' . $i])) {
        $kruiden[] = $_POST['kruiden' . $i];
    }
}

$kruiden = json_encode($kruiden);
$conn = new DatabaseController();

$conn->query("UPDATE pizza SET bodemFormaat = :size, saus = :saus, toppings = :topping, kruiden = :kruiden WHERE id = :id");
$conn->bind(':size', $_POST['bodem-formaat']);
$conn->bind(':saus', $_POST['saus']);
$conn->bind(':topping', $_POST['topping']);
$conn->bind(':kruiden', $kruiden);
$conn->bind(':id', $_POST['id']);


//$conn->print_query();
if ($conn->execute()) {
    header("LOCATION: show.php/?msg=success");
} else {
    header("LOCATION: show.php/?msg=fail");
}

