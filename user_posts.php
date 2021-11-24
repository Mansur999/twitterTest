<?php 
include_once "includes/functions.php";

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
} else if(isset($_SESSION['user']['id'])){
    $id = $_SESSION['user']['id'];
}else{
    $id = 0;
}
$posts = get_posts($id);
if($id !=0){
    $title = "Твиты пользователя - " . $posts[0]['login'];
}else{
    $title = "Твиты пользователя";
}
include_once "includes/header.php";
if(isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id'])){
    include_once "includes/twit_forms.php";
}
include_once "includes/posts.php";
include_once "includes/footer.php";