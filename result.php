<?php

include "includes/functions.php";

echo "<pre>";
print_r($_POST);

saveNotifica($_POST);
header('Location: index.php');

?>
