<?php 
include_once "includes/functions.php";
$posts = get_posts();
$title = 'Главная страница';
$error = get_error_message();
include_once "includes/header.php";
if(isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id'])){
    include_once "includes/twit_forms.php";
}
include_once "includes/posts.php";
include_once "includes/footer.php";
