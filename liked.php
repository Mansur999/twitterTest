<?php 
include_once "includes/functions.php";
if(!log_in()){
    header("Location: " . get_url());
}
$posts = get_likes_posts();
$title = 'Понравившиеся твиты';

include_once "includes/header.php";
include_once "includes/posts.php";
include_once "includes/footer.php";