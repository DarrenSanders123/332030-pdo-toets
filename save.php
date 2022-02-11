<?php
include "DatabaseController.php";
if (!empty($_POST)) {
    $kruiden = array();
    for ($i = 0; $i < 5; $i++) {
        if (isset($_POST['kruiden' . $i])) {
            $kruiden[] = $_POST['kruiden' . $i];
        }
    }

    $kruidenS = json_encode($kruiden);

    $conn = new DatabaseController();
    $conn->query('INSERT INTO pizza VALUES (null, :size, :saus, :toppings, :kruiden)');

    $conn->bind(':size', $_POST['bodem-formaat']);
    $conn->bind(':saus', $_POST['saus']);
    $conn->bind(':toppings', $_POST['topping']);
    $conn->bind(':kruiden', $kruidenS);

    if ($conn->execute()) {
        header("LOCATION: ./?msg=success");
    } else {
        header("LOCATION: ./?msg=fail");
    }
} else {
    header("LOCATION: ./");
}