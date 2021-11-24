<?php
include_once "functions.php";

if(!log_in()){
    header("Location: " . get_url());
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    if(!delete_post($_GET['id'])){
        $_SESSION['error'] = 'Во время удаления поста что-то пошло не так';
    }
}

header("Location: " . get_url('user_posts.php'));
