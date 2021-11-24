<?php
include_once "functions.php";

if(!log_in()){
    header("Location: " . get_url());
}

if(isset($_POST['text']) && !empty($_POST['text']) && isset($_POST['image'])){
    if(!add_post($_POST['text'],$_POST['image'])){
        $_SESSION['error'] = 'Во время добавления поста что-то пошло не так';
    }
}

header("Location: " . get_url('user_posts.php'));
