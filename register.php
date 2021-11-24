<?php 
include_once "includes/functions.php";

if(isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id'])){
    header("Location: " . get_url());
}

$title = 'Регистрация';
$error = get_error_message();

include_once "includes/header.php";
include_once "includes/register_form.php";
include_once "includes/footer.php";

?>